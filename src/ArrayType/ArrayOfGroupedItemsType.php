<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfGroupedItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of groups that are found with the search and
 * aggregation criteria that is identified in the FindItem operation request.
 *
 * @package php-ews\Array
 */
class ArrayOfGroupedItemsType extends ArrayType
{
    /**
     * Represents a collection of items that are the result of a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\GroupedItemsType[]
     */
    public $GroupedItems = array();
}
