<?php
/**
 * Contains NonEmptyArrayOfItemChangeDescriptionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a set of elements that define append, set, and delete changes to
 * item properties.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
{
    /**
     * Represents data to append to a single property of an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * Represents an operation to delete a given property from an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var DeleteItemFieldType
     */
    public $DeleteItemField;

    /**
     * Represents an update to a single property of an item in an UpdateItem
     * operation.
     *
     * @since Exchange 2007
     *
     * @var SetItemFieldType
     */
    public $SetItemField;
}
