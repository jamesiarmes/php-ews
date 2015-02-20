<?php
/**
 * Contains ArrayOfGroupedItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of groups that are found with the search and
 * aggregation criteria that is identified in the FindItem operation request.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfGroupedItemsType extends EWSType
{
    /**
     * Represents a collection of items that are the result of a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var GroupedItemsType
     */
    public $GroupedItems;
}
