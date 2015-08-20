<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

//Get our item to update
$item = $calendar->getCalendarItems()[0];

$itemId = $item->getItemId();

$newStart = new \DateTime('9:00');

//Let's send off the request to update
$updateItems = $calendar->updateCalendarItem($itemId->getId(), $itemId->getChangeKey(), array(
    'Subject' => 'Testing Update 2',
    'Start' => $newStart->format('c')
));

$newItemId = $updateItems[0]->getItemId();

//You can also update the series of a recurring event,
// if you have it's Master ID (The ID passed back when you first created the series)
$response = $calendar->updateCalendarItem($masterItem->getId(), $masterItem->getChangeKey(), array(
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
