<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsChangesType
 *
 *
 * XSD Type: SyncFolderItemsChangesType
 *
 * @method SyncFolderItemsChangesType getCreate()
 * @method SyncFolderItemsChangesType setCreate(array $create)
 * @method SyncFolderItemsChangesType getUpdate()
 * @method SyncFolderItemsChangesType setUpdate(array $update)
 * @method SyncFolderItemsChangesType getDelete()
 * @method SyncFolderItemsChangesType setDelete(array $delete)
 * @method SyncFolderItemsChangesType getReadFlagChange()
 * @method SyncFolderItemsChangesType setReadFlagChange(array $readFlagChange)
 */
class SyncFolderItemsChangesType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderItemsCreateOrUpdateType[] $create
     */
    protected $create = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderItemsCreateOrUpdateType[] $update
     */
    protected $update = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderItemsDeleteType[] $delete
     */
    protected $delete = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderItemsReadFlagType[]
     * $readFlagChange
     */
    protected $readFlagChange = null;


}

