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
     * @var \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType
     *
     * @since Exchange 2013
     */
    public $BodyType;

    /**
     * Contains the value of the body content.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $Value;
}
