<?php
/**
 * Contains UserMailboxType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a user mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserMailboxType extends EWSType
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
