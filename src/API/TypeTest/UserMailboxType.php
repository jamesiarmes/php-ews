<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserMailboxType
 *
 * User Mailbox.
 * XSD Type: UserMailboxType
 *
 * @method UserMailboxType getId()
 * @method UserMailboxType setId($id)
 * @method UserMailboxType getIsArchive()
 * @method UserMailboxType setIsArchive($isArchive)
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

