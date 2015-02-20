<?php
/**
 * Contains ArrayOfUserMailboxesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of mailboxes.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfUserMailboxesType extends EWSType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var UserMailboxType
     */
    public $UserMailbox;
}
