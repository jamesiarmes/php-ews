<?php

use jamesiarmes\PEWS\API;

$api = API::withUsernameAndPassword('server', 'username', 'password');
$calendar = $api->getCalendar();

//Delete One Item
$item = $calendar->getCalendarItems()[0];

$calendar->deleteCalendarItem($item->getItemId());

//Delete all items between two date ranges
$calendar->deleteAllCalendarItems(new DateTime('8:00 AM'), new DateTime('5:00 PM'));
