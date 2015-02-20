<?php
/**
 * Contains InvalidRecipientType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the SMTP address of the invalid recipient and information about
 * why the recipient is invalid.
 *
 * @package jamesiarmes\EWS\Types
 */
class InvalidRecipientType extends EWSType
{
    /**
     * Provides a text description of the status of the response.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var InvalidRecipientResponseCodeType
     */
    public $ResponseCode;

    /**
     * Contains the SMTP address of the invalid recipient.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SmtpAddress;
}
