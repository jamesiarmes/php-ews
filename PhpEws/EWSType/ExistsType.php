<?php
/**
 * The Exists element represents a search expression that returns true if the
 * supplied property exists on an item.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExistsType type.
 */
class EWSType_ExistsType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
