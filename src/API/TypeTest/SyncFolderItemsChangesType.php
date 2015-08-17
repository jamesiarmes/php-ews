<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class SyncFolderItemsChangesType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderItemsCreateOrUpdateType[]
     * $create
     */
    protected $create = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderItemsCreateOrUpdateType[]
     * $update
     */
    protected $update = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderItemsDeleteType[] $delete
     */
    protected $delete = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderItemsReadFlagType[]
     * $readFlagChange
     */
    protected $readFlagChange = null;


}

