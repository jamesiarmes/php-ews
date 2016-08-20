<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserMailboxType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a user mailbox.
 *
 * @package php-ews\Type
 */
class UserMailboxType extends Type
{
    /**
     * The text value of the Id attribute is the identifier of the mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;

    /**
     * Whether the mailbox is an archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IsArchive;
}
