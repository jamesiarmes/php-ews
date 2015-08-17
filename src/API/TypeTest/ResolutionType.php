<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method ResolutionType getMailbox()
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ResolutionType getContact()
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ContactItemType $contact
     */
    protected $contact = null;


}

