<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PreviewItemResponseShapeType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the requested property set to be returned in a discovery search.
 *
 * @package php-ews\Type
 */
class PreviewItemResponseShapeType extends Type
{
    /**
     * Identifies additional properties.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Specifies either the default preview with all properties returned or a
     * compact preview with fewer properties returned.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PreviewItemBaseShapeType
     */
    public $BaseShape;
}
