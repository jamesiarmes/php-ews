<?php
/**
 * Contains EWSType_ArrayOfUserMailboxesType.
 */

/**
 * Represents an array of mailboxes.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfUserMailboxesType extends EWSType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var EWSType_UserMailboxType
     */
    public $UserMailbox;
}
