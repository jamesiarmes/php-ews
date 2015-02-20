<?php
/**
 * Contains InternetHeaderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the Internet message header for a given header within a headers
 * collection.
 *
 * @package jamesiarmes\EWS\Types
 */
class InternetHeaderType extends EWSType
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
