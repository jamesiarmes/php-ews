<?php
/**
 * Contains SyncFolderItemsReadFlagType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies whether or not an item has been read.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderItemsReadFlagType extends EWSType
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
     * @var ItemIdType
     */
    public $ItemId;
}
