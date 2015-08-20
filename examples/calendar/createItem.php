<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');
$calendar = $api->getCalendar();

$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$createdItemIds = $calendar->createCalendarItems(array(
    'Subject' => 'Test',
    'Start' => $start->format('c'),
    'End' => $end->format('c')
));
