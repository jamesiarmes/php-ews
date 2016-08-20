<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\InternetHeaderType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the Internet message header for a given header within a headers
 * collection.
 *
 * @package php-ews\Type
 *
 * @todo Extend a string class.
 */
class InternetHeaderType extends Type
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
