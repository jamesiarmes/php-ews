<?php
/**
 * Contains ArrayOfMailboxData.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a list of mailboxes to query for availability information.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfMailboxData extends EWSType
{
    /**
     * Represents an individual mailbox user and options for the type of data to
     * be returned about the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var MailboxData
     */
    public $MailboxData;
}
