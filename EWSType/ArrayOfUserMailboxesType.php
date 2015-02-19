<?php
/**
 * Contains EWSType_ArrayOfUserMailboxesType.
 */

/**
 * Represents an array of mailboxes.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfUserMailboxesType extends EWSType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\UserMailboxType
     */
    public $UserMailbox;
}
