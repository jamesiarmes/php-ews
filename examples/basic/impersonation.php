<?php

use jamesiarmes\PEWS\API\Type\ConnectingSIDType;
use jamesiarmes\PEWS\API\Type\ExchangeImpersonation;

//Impersonate an email address
$api = new API();
$api->buildClient('server', 'username', 'password', ['impersonation' => 'user@domain.com' ]);

//Build your own impersonation
$connectingSID = new ConnectingSIDType();
$connectingSID->setPrincipalName('Some Name');
$connectingSID->setPrimarySmtpAddress('user@domain.com');

$impersonation = new ExchangeImpersonation();
$impersonation->setConnectingSID($connectingSID);

$api->buildClient('server', 'username', 'password', ['impersonation' => $impersonation ]);
