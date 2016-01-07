<?php
/**
 * Contains EWSType_ArrayOfMailboxData.
 */

/**
 * Represents a list of mailboxes to query for availability information.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfMailboxData extends EWSType
{
    /**
     * Represents an individual mailbox user and options for the type of data to
     * be returned about the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MailboxData
     */
    public $MailboxData;
}
