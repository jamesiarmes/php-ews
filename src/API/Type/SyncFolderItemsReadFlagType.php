<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method ItemIdType getItemId()
 * @method SyncFolderItemsReadFlagType setItemId(ItemIdType $itemId)
 * @method boolean isRead()
 * @method boolean getIsRead()
 * @method SyncFolderItemsReadFlagType setIsRead(boolean $isRead)
 */
class SyncFolderItemsReadFlagType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var boolean
     */
    protected $isRead = null;
}
