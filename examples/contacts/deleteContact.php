<?php

use jamesiarmes\PEWS\Contacts\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

$api->deleteItems($contact[0]->getItemId());
