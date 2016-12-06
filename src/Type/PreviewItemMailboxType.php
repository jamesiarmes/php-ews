<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PreviewItemMailboxType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the mailbox identifier and the user’s primary Simple Mail Transfer
 * Protocol (SMTP) address.
 *
 * @package php-ews\Type
 */
class PreviewItemMailboxType extends Type
{
    /**
     * Specifies an identifier for the mailbox that is accessed by discovery
     * search.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $MailboxId;

    /**
     * Specifies the primary Simple Mail Transfer Protocol (SMTP) address of the
     * mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
