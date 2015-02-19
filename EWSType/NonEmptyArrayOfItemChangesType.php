<?php
/**
 * Contains EWSType_NonEmptyArrayOfItemChangesType.
 */

/**
 * Represents an array of ItemChange elements that identify items and the
 * updates to apply to the items.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfItemChangesType extends EWSType
{
    /**
     * Contains an item identifier and the updates to apply to the item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemChangeType
     */
    public $ItemChange;
}
