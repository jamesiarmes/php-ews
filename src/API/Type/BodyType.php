<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\BodyType.
 */

namespace jamesiarmes\PEWS\API\Type;

/**
 * Specifies the body of an item.
 *
 * @package php-ews\Types
 */
class BodyType extends String
{
    /**
     * Specifies the type of the body.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\API\Enumeration\BodyTypeType
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
