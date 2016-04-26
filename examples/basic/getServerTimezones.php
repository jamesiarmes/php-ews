<?php

//Include the API
use jamesiarmes\PEWS\API;

//Create and build the client
$api = API::withUsernameAndPassword('server', 'username', 'password');

//Get a list of timezones with only Name and ID
$timezones = $api->getServerTimezones();

//Get a list of timezones with all information
$timezones = $api->getServerTimezones(array(), true);

//Get a specific timezone with all information
$timezones = $api->getServerTimezones(array('Central European Standard Time'), true);
