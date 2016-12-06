<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfUserMailboxesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of mailboxes.
 *
 * @package php-ews\Array
 */
class ArrayOfUserMailboxesType extends ArrayType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\UserMailboxType[]
     */
    public $UserMailbox = array();
}
