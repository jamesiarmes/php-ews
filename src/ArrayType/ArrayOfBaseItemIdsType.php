<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfBaseItemIdsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines the unique identities of items, occurrence items, and recurring
 * master items that are used to delete, send, get, move, or copy items in the
 * Exchange store.
 *
 * @package php-ews\Array
 */
class ArrayOfBaseItemIdsType extends ArrayType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType[]
     */
    public $ItemId = array();
}
