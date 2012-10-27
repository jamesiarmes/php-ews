<?php
/**
 * Contains EWSType_GetPasswordExpirationDateType.
 */

/**
 * Defines a request to get the password expiration date for an email account.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetPasswordExpirationDateType extends EWSType
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
