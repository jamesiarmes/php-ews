<?php

use jamesiarmes\PEWS\Contacts\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

//EmailAddress is a bit different from most field updates. It's a what's known as an "Indexed Field URI", which means
//that each email address has an "index". This is the "Key" that you used when creating this EmailAddress. So in order
//to update it, we need to tell EWS what the key of the item we want to update is. For this, we use "EmailAddress:key".

//However, we know that we want to update an email address, but the actual field we need to update is "EmailAddresses",
//hence why instead of a simple $key => $value array, we have this multi-dimensional array. They value of
//"EmailAddress:key" need to have the same structure as when we created the value.

//Phone numbers have to be updated in the same manner
$api->updateContactItem($contact[0]->getItemId(), array(
    'GivenName' => 'Jane',
    'EmailAddress:EmailAddress1' => array (
        'EmailAddresses' => array (
            'Entry' => array('Key' => 'EmailAddress1', '_value' => 'jane.smith@gmail.com')
        )
    ),
    'PhoneNumber:HomePhone' => array (
        'PhoneNumbers' => array (
            'Entry' => array('Key' => 'HomePhone', '_value' => '111')
        )
    )
));
