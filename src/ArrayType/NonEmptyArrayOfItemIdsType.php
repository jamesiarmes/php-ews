<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemIdsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of item ids.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfItemIdsType extends ArrayType
{
    /**
     * Specifies the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType[]
     */
    public $ItemId = array();
}
