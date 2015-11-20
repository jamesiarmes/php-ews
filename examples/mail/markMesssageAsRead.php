<?php

require_once "vendor/autoload.php";

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\Mail\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mailItem = $api->getMailItems()[0];
$read = $mailItem->isRead();

if (!$read) {
    //Mark the mail as read
    $api->markMailAsRead($mailItem->getItemId());
} else {
    //Mark it as unread
    $api->markMailAsRead($mailItem->getItemId(), false);
}
