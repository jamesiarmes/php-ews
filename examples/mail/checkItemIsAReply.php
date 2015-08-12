<?php

require_once "vendor/autoload.php";

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\TypeTest;

$api = new \jamesiarmes\PEWS\Mail\MailAPI();
$api->buildClient('server', 'username', 'password');

$mailItem = $api->getMailItems()[0];
$read = $mailItem->isAReply();
