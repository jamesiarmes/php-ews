<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

//Delete One Item
$item = $calendar->getCalendarItems()[0];

$itemId = $item->getItemId();

$calendar->deleteCalendarItem($itemId->getId(), $itemId->getChangeKey());

//Delete all items between two date ranges
$calendar->deleteAllCalendarItems(new DateTime('8:00 AM'), new DateTime('5:00 PM'));
