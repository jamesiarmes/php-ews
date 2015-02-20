<?php
/**
 * Contains GetPasswordExpirationDateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to get the password expiration date for an email account.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetPasswordExpirationDateType extends EWSType
{
    /**
     * Represents the email address of the email account for which the password
     * expiration date is to be returned.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $MailboxSmtpAddress;
}
