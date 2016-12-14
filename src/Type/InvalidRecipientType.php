<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\InvalidRecipientType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the SMTP address of the invalid recipient and information about
 * why the recipient is invalid.
 *
 * @package php-ews\Type
 */
class InvalidRecipientType extends Type
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\InvalidRecipientResponseCodeType
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
