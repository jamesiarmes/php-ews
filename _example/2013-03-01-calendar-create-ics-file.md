---
title:  "Calendar: Create ICS File"
date:   2013-03-01
updated: 2013-03-01
category: "0.1"
tags: calendar
---
Simple form to create an ICS (iCalendar) file.

Users profiles stored in include_user1.php:

```php?start_inline=1
/* 
account info for user1
*/

$host="";
$username="";
$password="";
$version="";
?>
```

ics folder must be writable, form + code :

```php
<?php
/*
working with Exchange Server
thanks to https://github.com/jamesiarmes/php-ews
form to create ICS file
ics folder must be writable
author : cybermonde.org
*/

?>

<form action="" method="post" accept-charset="utf-8" >
    <p><label>User profile</label>
    <select name="userprofile" id="userprofile">
    <option value="user1">User 1</option>
    <option value="user2">User 2</option>
    </select>
    </p>
    <p>
    <label>How many months (today + ...)</label><br/>
    <label>1</label><input type="radio" name="countmonths" id="countmonths" value="1" checked="checked"/>
    <label>2</label><input type="radio" name="countmonths" id="countmonths" value="2"/>
    <label>3</label><input type="radio" name="countmonths" id="countmonths" value="3"/>
    <label>4</label><input type="radio" name="countmonths" id="countmonths" value="4"/>
    <label>5</label><input type="radio" name="countmonths" id="countmonths" value="5"/>
    <label>6</label><input type="radio" name="countmonths" id="countmonths" value="6"/>
    <label>7</label><input type="radio" name="countmonths" id="countmonths" value="7"/>
    <label>8</label><input type="radio" name="countmonths" id="countmonths" value="8"/>
    <label>9</label><input type="radio" name="countmonths" id="countmonths" value="9"/>
    <label>10</label><input type="radio" name="countmonths" id="countmonths" value="10"/>
    <label>11</label><input type="radio" name="countmonths" id="countmonths" value="11"/>
    <label>12</label><input type="radio" name="countmonths" id="countmonths" value="12"/>
    </p>
    <p>
    <button type="submit" id="submitbutton">Create ICS</button>
    </p>
</form>
</div>



<?php
if ((isset($_POST['userprofile'])) || (isset($_POST['countmonths']))) {

	// libraries
	require_once('php-ews/ExchangeWebServices.php');
	require_once('php-ews/NTLMSoapClient.php');
	require_once('php-ews/NTLMSoapClient/Exchange.php');
	require_once('php-ews/EWS_Exception.php');
	require_once('php-ews/EWSType.php');


	// autoload
	spl_autoload_register( function ($class) { $class = explode('_', $class); if ($class[0] == 'EWSType') require_once 'php-ews/' .$class[0] . '/' . $class[1] . '.php'; } );

	// connect with userprofile stored in include_"userprofilename".php
	require_once("include_".$_POST['userprofile'].".php");

	// Define EWS
	$ews = new ExchangeWebServices($host, $username, $password, $version);

	// Set init class
	$request = new EWSType_FindItemType();
	// Use this to search only the items in the parent directory in question or use ::SOFT_DELETED
	// to identify "soft deleted" items, i.e. not visible and not in the trash can.
	$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
	// This identifies the set of properties to return in an item or folder response
	$request->ItemShape = new EWSType_ItemResponseShapeType();
	$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;

	// Define the timeframe to load calendar items
	$request->CalendarView = new EWSType_CalendarViewType();
	$request->CalendarView->StartDate =  date("c");// current date
	$request->CalendarView->EndDate = date("c", strtotime("+".$_POST['countmonths']." months"));// "countmonths" month(s) later

	// Only look in the "calendars folder"
	$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
	$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
	$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
	 
	// Send request
	$response = $ews->FindItem($request);

	// ics header
	$icsdetails = "BEGIN:VCALENDAR".chr(10);
	$icsdetails = $icsdetails."VERSION:2.0".chr(10);
	$icsdetails = $icsdetails."PRODID:-//cybermonde.org/handcal//NONSGML v1.0//EN".chr(10);

	// Loop through each item if event(s) were found in the timeframe specified
	if ($response->ResponseMessages->FindItemResponseMessage->RootFolder->TotalItemsInView > 0){
		$events = $response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
		foreach ($events as $event){
			$start = $event->Start;
			$end = $event->End;
			$subject = $event->Subject;
			$location = $event->Location;
			// ics detail
			$icsdetails = $icsdetails."BEGIN:VEVENT".chr(10);
			// clean date
			$cleandate = array("-", ":");
			$icsdetails = $icsdetails."DTSTART:".str_replace($cleandate, "", $start).chr(10);
			$icsdetails = $icsdetails."DTEND:".str_replace($cleandate, "", $end).chr(10);
			$icsdetails = $icsdetails."SUMMARY:".$subject.chr(10);
			$icsdetails = $icsdetails."LOCATION:".$location.chr(10);
			$icsdetails = $icsdetails."END:VEVENT".chr(10);
		}
	}
	else {
		// No items returned
	}

	// ics footer
	$icsdetails = $icsdetails."END:VCALENDAR".chr(10);

	// write ics file
	$fileout="ics/$username.ics";
	$fileptr = fopen($fileout, "w");
	fwrite($fileptr, $icsdetails);
	fclose($fileptr);

	echo "<p><a href='ics/$username.ics'>$username.ics</a></p>";

} else {

}
?>
```
