<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BodyType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Specifies the body of an item.
 *
 * @package php-ews\Type
 */
class BodyType extends StringType
{
    /**
     * Specifies the type of the body.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\BodyTypeType
     */
    public $BodyType;

    /**
     * Boolean value that indicates whether the body is truncated.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsTruncated;
}
