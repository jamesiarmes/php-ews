<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

//Get our item to update
$item = $calendar->getCalendarItems()[0];

$itemId = $item->ItemId;

//Let's send off the request to update
$response = $calendar->updateCalendarItem($itemId->Id, $itemId->ChangeKey, array(
    'Subject' => 'Testing Update 2',
    'Start' => $newStart->format('c')
));

$newItemId = $response[0]->CalendarItem->ItemId;

//You can also update the series of a recurring event,
// if you have it's Master ID (The ID passed back when you first created the series)
$response = $calendar->updateCalendarItem($masterItem->Id, $masterItem->ChangeKey, array(
    'Subject' => 'Test Update 2',
    'Recurrence' => array(
        'WeeklyRecurrence' => array(
            'Interval' => 1,
            'DaysOfWeek' => 'Wednesday'
        ),
        'NumberedRecurrence' => array(
            'StartDate' => $newStart->format('Y-m-d'),
            'NumberOfOccurrences' => 3
        )
    )
));
