<?php

use jamesiarmes\PEWS\Contacts\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$api->createContacts(array (
    'GivenName' => 'John',
    'Surname' => 'Smith',
    'EmailAddresses' => array(
        'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
    )
));
