<?php
/**
 * Contains ArrayOfSmtpAddressType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of recipients of a message.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfSmtpAddressType extends EWSType
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
