<?php
/**
 * Contains NonEmptyArrayOfItemChangesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of ItemChange elements that identify items and the
 * updates to apply to the items.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfItemChangesType extends EWSType
{
    /**
     * Contains an item identifier and the updates to apply to the item.
     *
     * @since Exchange 2007
     *
     * @var ItemChangeType
     */
    public $ItemChange;
}
