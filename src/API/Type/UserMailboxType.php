<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserMailboxType
 *
 * User Mailbox.
 * XSD Type: UserMailboxType
 *
 * @method UserMailboxType getId()
 * @method UserMailboxType setId(string $id)
 * @method UserMailboxType getIsArchive()
 * @method UserMailboxType setIsArchive(boolean $isArchive)
 */
class UserMailboxType extends Type
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property boolean $isArchive
     */
    protected $isArchive = null;
}
