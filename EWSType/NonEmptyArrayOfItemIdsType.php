<?php
/**
 * Contains EWSType_NonEmptyArrayOfItemIdsType.
 */

/**
 * Represents an array of item ids.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfItemIdsType extends EWSType
{
    /**
     * Specifies the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
