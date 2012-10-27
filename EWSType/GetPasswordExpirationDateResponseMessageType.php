<?php
/**
 * Contains EWSType_GetPasswordExpirationDateResponseMessageType.
 */

/**
 * Defines the response to a GetPasswordExpirationDate operation operation
 * request.
 *
 * @package php-ews\Types
 */
class EWSType_GetPasswordExpirationDateResponseMessageType extends EWSType
{
    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides the password expiration date for the email account specified in
     * the request.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $PasswordExpirationDate;
}
