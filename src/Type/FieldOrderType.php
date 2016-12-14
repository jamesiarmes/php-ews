<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FieldOrderType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single field by which to sort results and indicates the
 * direction for the sort.
 *
 * @package php-ews\Type
 */
class FieldOrderType extends Type
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Describes the sort order direction.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SortDirectionType
     */
    public $Order;
}
