<?php
/**
 * Contains GetInboxRulesRequestType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get the Inbox rules on a mailbox in the server store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetInboxRulesRequestType extends EWSType
{
    /**
     * Represents the SMTP address of the user whose Inbox rules are to be
     * retrieved.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MailboxSmtpAddress;
}
