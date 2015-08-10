<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MemberType
 *
 *
 * XSD Type: MemberType
 *
 * @method MemberType getKey()
 * @method MemberType setKey($key)
 * @method MemberType getMailbox()
 * @method MemberType setMailbox($mailbox)
 * @method MemberType getStatus()
 * @method MemberType setStatus($status)
 */
class MemberType extends Type
{

    /**
     * @property string $key
     */
    protected $key = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;

    /**
     * @property string $status
     */
    protected $status = null;


}

