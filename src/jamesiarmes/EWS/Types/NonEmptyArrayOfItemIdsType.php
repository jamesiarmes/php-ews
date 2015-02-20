<?php
/**
 * Contains NonEmptyArrayOfItemIdsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of item ids.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfItemIdsType extends EWSType
{
    /**
     * Specifies the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2010 SP1
     *
     * @var ItemIdType
     */
    public $ItemId;
}
