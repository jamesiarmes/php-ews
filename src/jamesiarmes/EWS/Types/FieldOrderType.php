<?php
/**
 * Contains FieldOrderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single field by which to sort results and indicates the
 * direction for the sort.
 *
 * @package jamesiarmes\EWS\Types
 */
class FieldOrderType extends EWSType
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Describes the sort order direction.
     *
     * @since Exchange 2007
     *
     * @var SortDirectionType
     */
    public $Order;
}
