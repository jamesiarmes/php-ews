<?php

/**
 * Quick Start
 *
 * This file is an example of how to quickly create a Calendar Item without going through the CalendarAPI, to show
 * that you can create items directly
 */

//Include the API
use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Enumeration;

//Create and build the client
$api = new API();
$api->buildClient('server', 'username', 'password');

//Get the folder to save the event to
$folderId = $api->getFolderByDistinguishedId('calendar');

//Create our event
$item = array('CalendarItem'=>array(
    'Start' => (new \DateTime('8:00 AM'))->format('c'),
    'Subject' => 'The Event Subject'
));

//Set our options
$options = array(
    'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE,
    'SavedItemFolderId' => array(
        'FolderId' => array('Id' => $folderId->Id)
    )
);

//Send the request
$items = $api->createItems($item, $options);
