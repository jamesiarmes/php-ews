<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
 *
 * @method EmailAddressType getMailbox()
 * @method SingleRecipientType setMailbox(EmailAddressType $mailbox)
 */
class SingleRecipientType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
