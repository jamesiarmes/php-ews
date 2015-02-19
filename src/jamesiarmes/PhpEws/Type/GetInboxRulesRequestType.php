<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetInboxRulesRequestType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to get the Inbox rules on a mailbox in the server store.
 *
 * @package php-ews\Types
 */
class GetInboxRulesRequestType extends BaseRequestType
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
