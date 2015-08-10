<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method SyncFolderItemsReadFlagType getItemId()
 * @method SyncFolderItemsReadFlagType setItemId($itemId)
 * @method SyncFolderItemsReadFlagType getIsRead()
 * @method SyncFolderItemsReadFlagType setIsRead($isRead)
 */
class SyncFolderItemsReadFlagType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property boolean $isRead
     */
    protected $isRead = null;


}

