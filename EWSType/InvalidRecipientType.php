<?php
/**
 * Contains EWSType_InvalidRecipientType.
 */

/**
 * Represents the SMTP address of the invalid recipient and information about
 * why the recipient is invalid.
 *
 * @package php-ews\Types
 */
class EWSType_InvalidRecipientType extends EWSType
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
     * @var EWSType_InvalidRecipientResponseCodeType
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
