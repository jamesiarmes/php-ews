<?php
/**
 * Contains EWSType_ArrayOfSmtpAddressType.
 */

/**
 * Represents an array of recipients of a message.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfSmtpAddressType extends EWSType
{
    /**
     * Represents the Simple Mail Transfer Protocol (SMTP) recipient address of
     * a calendar or contact sharing request.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SmtpAddress;
}
