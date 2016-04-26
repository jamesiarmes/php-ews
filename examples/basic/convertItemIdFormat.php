<?php

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Enumeration;
use jamesiarmes\PEWS\API\Type;

//Create and build the client
$api = API::withUsernameAndPassword('server', 'username', 'password');

$ews2007ItemId = new Type\ItemIdType($ews2007Id, $changeKey);
$ews2010ItemId = $api->convertIdFormat(
    $ews2007ItemId,
    Enumeration\IdFormatType::EWS_LEGACY_ID,
    Enumeration\IdFormatType::EWS_ID,
    'user@email.com'
);
