<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetPasswordExpirationDateResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetPasswordExpirationDate operation operation
 * request.
 *
 * @package php-ews\Response
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
