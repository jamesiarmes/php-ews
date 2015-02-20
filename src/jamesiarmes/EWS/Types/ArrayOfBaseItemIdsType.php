<?php
/**
 * Contains ArrayOfBaseItemIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the unique identities of items, occurrence items, and recurring
 * master items that are used to delete, send, get, move, or copy items in the
 * Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfBaseItemIdsType extends EWSType
{
    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;
}
