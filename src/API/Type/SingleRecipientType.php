<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
 *
 * @method SingleRecipientType getMailbox()
 * @method SingleRecipientType setMailbox(EmailAddressType $mailbox)
 */
class SingleRecipientType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;
}
