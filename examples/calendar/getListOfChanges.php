<?php

use jamesiarmes\PEWS\API;

$api = API::withUsernameAndPassword('server', 'username', 'password');
$calendar = $api->getCalendar();

//Get the initial list of Items
$changes = $calendar->listChanges();

//We use this to keep track of when we last asked for items
$syncState = $changes->getSyncState();

//Get a list of changes since we last asked for them
$changesSinceLsatCheck = $calendar->listChanges($syncState);
