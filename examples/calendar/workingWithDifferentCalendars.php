<?php

use jamesiarmes\PEWS\API;

$api = new API();
$api->buildClient('server', 'username', 'password');

//Get the default calendar
$calendar = $api->getCalendar();

//Get a calendar by the name 'Test'
$calendar = $api->getCalendar('Test');

//Change what calendar you're working with once you've picked it
$calendar->pickCalendar('Holidays');
