<?php

require_once "vendor/autoload.php";

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\Type\CalendarItem;
use jamesiarmes\PEWS\Caster;
use jamesiarmes\PEWS\Test\API\TypeTest;
use jamesiarmes\PEWS\Calendar\CalendarAPI;

$api = \jamesiarmes\PEWS\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    [
        'primarySmtpEmailAddress' => 'secondaryEmail@test.com'
    ]
);

$api->getFolderByDistinguishedId('inbox');
