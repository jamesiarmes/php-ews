<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a set of elements that define append, set, and delete changes to
 * item properties.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends ArrayType
{
    /**
     * Represents data to append to a single property of an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AppendToItemFieldType[]
     */
    public $AppendToItemField = array();

    /**
     * Represents an operation to delete a given property from an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeleteItemFieldType[]
     */
    public $DeleteItemField = array();

    /**
     * Represents an update to a single property of an item in an UpdateItem
     * operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SetItemFieldType[]
     */
    public $SetItemField = array();
}
