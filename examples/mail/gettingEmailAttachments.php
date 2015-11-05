<?php

require_once "vendor/autoload.php";

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\API\TypeTest;

$api = new \jamesiarmes\PEWS\Mail\MailAPI();
$api->buildClient('server', 'username', 'password');


$mail = $api->getMailItems();
$mailItem = $mail[1];

//When the item is first returned from getMailItems(), it doesn't have attachment information filled out. You need to
//get that mail item again directly
$mailItem = $api->getItem($mailItem->getItemId());

//getFileAttachment() always returns an array of file attachments, or null
$fileAttachment = $mailItem->getAttachments()->getFileAttachment()[0];

//Without this the content of the attachment is not returned, so we need to do another fetch to make sure we get the
//content
$attachment = $api->getAttachment($fileAttachment->getAttachmentId());

$name = $attachment->getName();
$contentType = $attachment->getContentType();
$content = $attachment->getContent();
