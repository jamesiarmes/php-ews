<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method BaseDelegateType getMailbox()
 * @method BaseDelegateType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;
}
