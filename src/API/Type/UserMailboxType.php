<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserMailboxType
 *
 * User Mailbox.
 * XSD Type: UserMailboxType
 *
 * @method string getId()
 * @method UserMailboxType setId(string $id)
 * @method boolean isArchive()
 * @method boolean getIsArchive()
 * @method UserMailboxType setIsArchive(boolean $isArchive)
 */
class UserMailboxType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var boolean
     */
    protected $isArchive = null;
}
