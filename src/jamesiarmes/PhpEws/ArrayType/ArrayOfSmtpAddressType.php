<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSmtpAddressType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of recipients of a message.
 *
 * @package php-ews\Array
 */
class ArrayOfSmtpAddressType extends ArrayType
{
    /**
     * Represents the Simple Mail Transfer Protocol (SMTP) recipient address of
     * a calendar or contact sharing request.
     *
     * @since Exchange 2010
     *
     * @var string[]
     */
    public $SmtpAddress = array();
}
