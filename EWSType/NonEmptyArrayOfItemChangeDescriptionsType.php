<?php
/**
 * Contains EWSType_NonEmptyArrayOfItemChangeDescriptionsType.
 */

/**
 * Represents a set of elements that define append, set, and delete changes to
 * item properties.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
{
    /**
     * Represents data to append to a single property of an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * Represents an operation to delete a given property from an item during an
     * UpdateItem operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DeleteItemFieldType
     */
    public $DeleteItemField;

    /**
     * Represents an update to a single property of an item in an UpdateItem
     * operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SetItemFieldType
     */
    public $SetItemField;
}
