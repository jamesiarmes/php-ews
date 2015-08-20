<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getMailbox()
 * @method BaseDelegateType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
