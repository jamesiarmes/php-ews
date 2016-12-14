<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BodyContentType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the value of a BodyContentAttributedValue element.
 *
 * @package php-ews\Type
 */
class BodyContentType extends Type
{
    /**
     * Identifies how the body text is formatted.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $BodyType;

    /**
     * Contains the value of the body content.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
