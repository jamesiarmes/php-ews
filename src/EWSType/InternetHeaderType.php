<?php
/**
 * Contains EWSType_InternetHeaderType.
 */

/**
 * Represents the Internet message header for a given header within a headers
 * collection.
 *
 * @package php-ews\Types
 */
class EWSType_InternetHeaderType extends EWSType
{
    /**
     * The value of the header.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the header name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $HeaderName;
}
