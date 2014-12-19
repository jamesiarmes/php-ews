<?php
/**
 * Contains EWSType_SyncFolderItemsReadFlagType.
 */

/**
 * Identifies whether or not an item has been read.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderItemsReadFlagType extends EWSType
{
    /**
     * Indicates whether the read-flag has been set to true.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Identifies the item for which the read-flag has been changed.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
