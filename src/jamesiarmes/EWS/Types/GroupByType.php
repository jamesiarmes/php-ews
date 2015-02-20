<?php
/**
 * Contains GroupByType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines an arbitrary grouping for FindItem queries.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseGroupByType.
 */
class GroupByType extends EWSType
{
    /**
     * Represents the field that is used to determine the order of groups in a
     * response.
     *
     * @since Exchange 2007
     *
     * @var AggregateOnType
     */
    public $AggregateOn;

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

    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var SortDirectionType
     */
    public $Order;
}
