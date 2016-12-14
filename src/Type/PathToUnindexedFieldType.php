<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Identifies frequently referenced properties by URI.
 *
 * @package php-ews\Type
 */
class PathToUnindexedFieldType extends BasePathToElementType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType
     */
    public $FieldURI;
}
