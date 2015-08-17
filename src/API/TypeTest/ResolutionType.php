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
 * @method ResolutionType setMailbox($mailbox)
 * @method ResolutionType getContact()
 * @method ResolutionType setContact($contact)
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

