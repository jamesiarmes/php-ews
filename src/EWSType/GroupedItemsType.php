<?php
/**
 * Contains EWSType_GroupedItemsType.
 */

/**
 * Represents a collection of items that are the result of a grouped FindItem
 * operation call.
 *
 * @package php-ews\Types
 */
class EWSType_GroupedItemsType extends EWSType
{
    /**
     * Represents the property value that is used to group items in a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $GroupIndex;

    /**
     * Contains an array of grouped items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;
}
