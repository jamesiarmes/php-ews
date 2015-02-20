<?php
/**
 * Contains GetPasswordExpirationDateResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the response to a GetPasswordExpirationDate operation operation
 * request.
 *
 * @package jamesiarmes\EWS\Types
 */
class GetPasswordExpirationDateResponseMessageType extends EWSType
{
    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010 SP2
     *
     * @var ResponseClassType
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
