<?php
/**
 * Contains GroupedItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of items that are the result of a grouped FindItem
 * operation call.
 *
 * @package jamesiarmes\EWS\Types
 */
class GroupedItemsType extends EWSType
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
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
