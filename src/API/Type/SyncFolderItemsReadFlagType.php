<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method SyncFolderItemsReadFlagType getItemId()
 * @method SyncFolderItemsReadFlagType setItemId(ItemIdType $itemId)
 * @method SyncFolderItemsReadFlagType getIsRead()
 * @method SyncFolderItemsReadFlagType setIsRead(boolean $isRead)
 */
class SyncFolderItemsReadFlagType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property boolean $isRead
     */
    protected $isRead = null;


}

