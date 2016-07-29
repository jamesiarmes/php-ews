<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GroupedItemsType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a collection of items that are the result of a grouped FindItem
 * operation call.
 *
 * @package php-ews\Type
 */
class GroupedItemsType extends Type
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
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRealItemsType
     */
    public $Items;
}
