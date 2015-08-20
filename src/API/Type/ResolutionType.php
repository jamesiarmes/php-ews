<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class ResolutionType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ContactItemType $contact
     */
    protected $contact = null;


}

