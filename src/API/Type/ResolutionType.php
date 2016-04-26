<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method EmailAddressType getMailbox()
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ContactItemType getContact()
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ContactItemType
     */
    protected $contact = null;
}
