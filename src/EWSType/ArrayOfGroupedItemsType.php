<?php
/**
 * Contains EWSType_ArrayOfGroupedItemsType.
 */

/**
 * Represents a collection of groups that are found with the search and
 * aggregation criteria that is identified in the FindItem operation request.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfGroupedItemsType extends EWSType
{
    /**
     * Represents a collection of items that are the result of a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var EWSType_GroupedItemsType
     */
    public $GroupedItems;
}
