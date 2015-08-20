<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MemberType
 *
 *
 * XSD Type: MemberType
 *
 * @method MemberType getKey()
 * @method MemberType setKey(string $key)
 * @method MemberType getMailbox()
 * @method MemberType setMailbox(EmailAddressType $mailbox)
 * @method MemberType getStatus()
 * @method MemberType setStatus(string $status)
 */
class MemberType extends Type
{

    /**
     * @property string $key
     */
    protected $key = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;

    /**
     * @property string $status
     */
    protected $status = null;
}
