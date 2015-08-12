<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

//Get all items from midday today
$items = $calendar->getCalendarItems('12:00 PM');

//Get all items from 8 AM to 9 AM today
$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$items = $calendar->getCalendarItems($start, $end);

//Get a list of items in a Date Range
$items = $calendar->getCalendarItems('31/05/2015', '31/06/2015');
