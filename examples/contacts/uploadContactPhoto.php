<?php

use jamesiarmes\PEWS\Contacts\ContactsAPI as API;
use jamesiarmes\PEWS\API\Type;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts()[0];

$attachment = new Type\FileAttachmentType();
$attachment->setName('Avatar');
$attachment->setContent(file_get_contents("./github.png"));
$attachment->setContentType('image/png');
$attachment->setIsContactPhoto(true);

$api->getClient()->CreateAttachment(array(
    'ParentItemId' => $contact->getItemId()->toArray(),
    'Attachments' => array('FileAttachment' => array($attachment->toXmlObject()))
));

//Or this is an alternate way of doing it

$api->getClient()->CreateAttachment(array(
    'ParentItemId' => $contact->getItemId()->toArray(),
    'Attachments' => array('FileAttachment' => array(
        'Name' => 'Avatar',
        'Content' => file_get_contents("./github.png"),
        'ContentType' => 'image/png',
        'IsContactPhoto' => true
    ))
));
