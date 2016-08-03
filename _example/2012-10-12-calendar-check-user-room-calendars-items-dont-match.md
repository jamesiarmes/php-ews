---
title:  "Calendar: Check User and Room Calendars for Items That Don't Match"
date:   2012-10-12
updated: 2012-10-12
category: "0.1"
tags: calendar
---
Check user calendars for events that use a room as a location. Compare events to
see that they match on the room calendar.  

Use case: Users ignore when a room declines their meeting request. This will
show when a user "thinks" they have a room booked, but don't.

```php?start_inline=1
/*

This script checks the specified user calendars for meetings that specify a room as a location.
It then checks the room calendar to see if the meetings match - check is by organizer.
It compares the organizer and time of the meeting.
It reports on any meetings that don't match.
Duplicate subjects are ignored so the same conflict isn't listed when it's found on more than one user's calendar.
The $rooms and $users arrays could easily be changed to LDAP queries.

Assumes that $username has reviewer permission to all calendars

Search for CHANGE THIS and change as needed.  There are 9 instances of CHANGE THIS.

*/

require_once('ExchangeWebServices.php');
require_once('NTLMSoapClient.php');
require_once('NTLMSoapClient/Exchange.php');
require_once('EWS_Exception.php');
require_once('EWSType.php');
spl_autoload_register(
	function ($class) {
		$class = explode('_', $class);
		if ($class[0] == 'EWSType')
			require_once $class[0] . '/' . $class[1] . '.php';
	}
);
$host = 'exchange.domain.com'; //CHANGE THIS
$username = 'username';  //CHANGE THIS
$password = 'password'; //CHANGE THIS
$version = 'Exchange2010_SP2'; //CHANGE THIS IF NECESSARY
$ews = new ExchangeWebServices($host, $username, $password, $version);

// This is a list of the locations you want to check.  
$rooms = array("Conference Room 1", "Conference Room 2"); //CHANGE THIS
$users = array("jsmith","jdoe"); //CHANGE THIS

// Create the date range for all of the current day - example is EDT
$date = date('Y-m-d');
$today = strtotime(($date) . " +4 hours");
$today = date('Y-m-d H:i:s', $today);
$today = preg_replace('/\s+/', 'T', $today);
$tomorrow = strtotime(($date) . " +1 day 4 hours");
$tomorrow = date('Y-m-d H:i:s', $tomorrow);
$tomorrow = preg_replace('/\s+/', 'T', $tomorrow);

// $count is used to determine if no conflicts were found
$count = 0;

// $ignoresubjects filters duplicates and can also be used to ignore certain subjects
$ignoresubjects = array("Test Meeting 1","Test Meeting 2"); // CHANGE THIS AS NEEDED
echo "<TITLE>Room Conflict Report</TITLE>";
echo "<h3>The following items may be in conflict.<hr /></h3>";
foreach ($users as $calendar) {
	$request = new EWSType_FindItemType();
	$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
	$request->ItemShape = new EWSType_ItemResponseShapeType();
	$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;
	$request->CalendarView = new EWSType_CalendarViewType();
	$request->CalendarView->StartDate = $today;
	$request->CalendarView->EndDate = $tomorrow;
	$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
	$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
	$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
	$request->ParentFolderIds->DistinguishedFolderId->Mailbox->EmailAddress = "$calendar@domain.com"; // CHANGE THIS
	$response = $ews->FindItem($request);
	$events = $response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
	
	// If there is only one item on the user's calendar today, convert $events to an array
	if (!is_array($events)) {
		$events = array($events);
	}
	
	foreach ($events as $event){
		$start = $event->Start;
		$end = $event->End;
		$subject = $event->Subject;
		if (!in_array($subject, $ignoresubjects)) {
			array_push($ignoresubjects, $subject);
			$location = $event->Location;
			$organizer = $event->Organizer->Mailbox->Name;
			if (in_array($location, $rooms)) {
				//Remove any spaces from the location name.  
				$trimlocation = preg_replace('/\s+/', '', $location);
				
				//Add one second to start time to fix problem with adjoining appointments					
				$startadjusted = strtotime(($start) . " +4 hours 1 second");
				$startadjusted = date('Y-m-d H:i:s', $startadjusted);
				$startadjusted = preg_replace('/\s+/', 'T', $startadjusted);
				$zulu = "Z";
				$startadjusted = "$startadjusted$zulu";
				$request2 = new EWSType_FindItemType();
				$request2->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
				$request2->ItemShape = new EWSType_ItemResponseShapeType();
				$request2->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;
				$request2->CalendarView = new EWSType_CalendarViewType();
				$request2->CalendarView->StartDate = $startadjusted;
				$request2->CalendarView->EndDate = $end;
				$request2->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
				$request2->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
				$request2->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
				$request2->ParentFolderIds->DistinguishedFolderId->Mailbox->EmailAddress = "$trimlocation@domain.com"; //CHANGE THIS
				$response2 = $ews->FindItem($request2);
				$event2 = $response2->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
				$start2 = $event2->Start;
				$end2 = $event2->End;
				$subject2 = $event2->Subject;
				$location2 = $event2->Location;
				$organizer2 = $event2->Organizer->Mailbox->Name;
				
				// Check to see that the organizer matches on both calendars
				if ($organizer != $organizer2) {
					++$count;
					$starttime = strtotime($start);
					$starttime = date('m/d/Y g:i A', $starttime);
					echo "Calendar: $calendar";
					echo ('<br />');						
					echo "Organizer: $organizer";
					echo ('<br />');
					echo ("<b>$location</b> does not have a corresponding meeting at $starttime.");
					echo ('<br />');
					echo "Subject is: $subject";
					echo ('<br />');
					echo "Subject on room calendar is: $subject2";
					echo ('<br />');
					echo ('<hr />');
				}
			}
		}
	}
}
if ($count == 0) {
	echo "No conflicts were found.";
	exit();
}
exit();
```
