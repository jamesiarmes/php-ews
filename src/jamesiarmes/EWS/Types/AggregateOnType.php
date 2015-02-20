<?php
/**
 * Contains AggregateOnType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the property that is used to determine the order of grouped items
 * for a grouped FindItem result set.
 *
 * @package jamesiarmes\EWS\Types
 */
class AggregateOnType extends EWSType
{
    /**
     * Indicates the maximum or minimum value of the property identified by the
     * FieldURI element that is used for ordering the groups of items.
     *
     * The following are the possible values:
     * - Minimum
     * - Maximum
     *
     * @since Exchange 2007
     *
     * @var AggregateType
     */
    public $Aggregate;

    /**
     * Identifies extended MAPI properties to get, set, or create.
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
}
