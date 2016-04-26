<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getMailbox()
 * @method ExpandDLType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class ExpandDLType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
