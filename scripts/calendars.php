<?php

require_once '../vendor/autoload.php';

$host = 'mail.presence.fean.ch';

$password = '_AsrtVU6dA9_';
$username = "presence";
//
//
//$host = 'webmail.swisscom.com';
//$username = 'patrick.zahnd@swisscom.com';


//$ews = new ExchangeWebServices($host, $username, $password);
//
//// start building the find folder request
//$request = new EWSType_FindFolderType();
//$request->Traversal = EWSType_FolderQueryTraversalType::SHALLOW;
//$request->FolderShape = new EWSType_FolderResponseShapeType();
//$request->FolderShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;
//
//// configure the view
//$request->IndexedPageFolderView = new EWSType_IndexedPageViewType();
//$request->IndexedPageFolderView->BasePoint = 'Beginning';
//$request->IndexedPageFolderView->Offset = 0;
//
//// set the starting folder as the inbox
//$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
//$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
//$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
//
//// make the actual call
//$response = $ews->FindFolder($request);
//echo '<pre>'.print_r($response, true).'</pre>';
//
//exit();

// Define EWS
$ews = new ExchangeWebServices($host, $username, $password);

// Set init class
$request = new EWSType_FindItemType();
// Use this to search only the items in the parent directory in question or use ::SOFT_DELETED
// to identify "soft deleted" items, i.e. not visible and not in the trash can.
$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
// This identifies the set of properties to return in an item or folder response
$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

// Define the timeframe to load calendar items
$request->CalendarView = new EWSType_CalendarViewType();
$request->CalendarView->StartDate = '2015-01-01T00:00:00+03:00'; // an ISO8601 date e.g. 2012-06-12T15:18:34+03:00
$request->CalendarView->EndDate = '2015-03-01T00:00:00+03:00'; // an ISO8601 date later than the above

// Only look in the "calendars folder"
$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
$request->ParentFolderIds->DistinguishedFolderId->Mailbox->EmailAddress = "bastian@presence.fean.ch";
//$request->ParentFolderIds->DistinguishedFolderId->Mailbox->EmailAddress = "philip.eschenbacher@swisscom.com";


// Send request
$response = $ews->FindItem($request);

// Loop through each item if event(s) were found in the timeframe specified
if ($response->ResponseMessages->FindItemResponseMessage->RootFolder->TotalItemsInView > 0){
    $events = $response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
//    foreach ($events as $event){
//        $id = $event->ItemId->Id;
//        $change_key = $event->ItemId->ChangeKey;
//        $start = $event->Start;
//        $end = $event->End;
//        $subject = $event->Subject;
//        $location = $event->Location;
//    }

    $foo = (json_encode($events));
    $ee = 0;
}
else {
    // No items returned
}

