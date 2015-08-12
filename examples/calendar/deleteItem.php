<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

//Delete One Item
$item = $calendar->getCalendarItems()[0];

$itemId = $item->ItemId;

$calendar->deleteCalendarItem($itemId->ItemId, $itemId->ChangeKey);

//Delete all items between two date ranges
$calendar->deleteAllCalendarItems(new DateTime('8:00 AM'), new DateTime('5:00 PM'));
