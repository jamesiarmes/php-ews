<?php
/**
 * Contains EWSType_FieldOrderType.
 */

/**
 * Represents a single field by which to sort results and indicates the
 * direction for the sort.
 *
 * @package php-ews\Types
 */
class EWSType_FieldOrderType extends EWSType
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Describes the sort order direction.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;
}
