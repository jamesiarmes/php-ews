<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MemberType
 *
 *
 * XSD Type: MemberType
 *
 * @method string getKey()
 * @method MemberType setKey(string $key)
 * @method EmailAddressType getMailbox()
 * @method MemberType setMailbox(EmailAddressType $mailbox)
 * @method string getStatus()
 * @method MemberType setStatus(string $status)
 */
class MemberType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var string
     */
    protected $status = null;
}
