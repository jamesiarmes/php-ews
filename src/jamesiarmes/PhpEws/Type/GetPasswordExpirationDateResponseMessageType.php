<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetPasswordExpirationDateResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the response to a GetPasswordExpirationDate operation operation
 * request.
 *
 * @package php-ews\Types
 */
class GetPasswordExpirationDateResponseMessageType extends ResponseMessageType
{
    /**
     * Provides the password expiration date for the email account specified in
     * the request.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $PasswordExpirationDate;
}
