<?php

use jamesiarmes\PEWS\Contacts\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contacts = $api->getContacts();

//If you want to get contacts within a folder
$folder = $api->getFolderByDisplayName('Your Folder', 'contacts');
$contacts = $api->getContacts($folder->getFolderId());
