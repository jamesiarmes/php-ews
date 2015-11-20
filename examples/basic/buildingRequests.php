<?php

/**
 * Building Requests
 *
 * This file is an example on how to build requests manually and execute them directly instead of relying on the
 * simple use section of the library. Essentially, you can create your requests in arrays, pass them through
 * Type::buildFromArray($array) and then post them straight to the API Client.
 */

//Include the API
use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Enumeration;
use jamesiarmes\PEWS\API\Type;

//Create and build the client
$api = API::withUsernameAndPassword('server', 'username', 'password');

//Build the request as an array
$request = array(
    'FolderShape' => array(
        'BaseShape' => array('_' => 'Default')
    ),
    'FolderIds' => array(
        'DistinguishedFolderId' => array(
            'Id' => 'calendar'
        )
    )
);

//Turn the array in to an object to pass to the API
$request = Type::buildFromArray($request);

//Send the request and get the response
$response = $api->getClient()->GetFolder($request);
