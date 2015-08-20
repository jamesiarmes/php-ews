<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderItemsChangesType
 *
 *
 * XSD Type: SyncFolderItemsChangesType
 *
 * @method array getCreate()
 * @method SyncFolderItemsChangesType setCreate(array $create)
 * @method array getUpdate()
 * @method SyncFolderItemsChangesType setUpdate(array $update)
 * @method array getDelete()
 * @method SyncFolderItemsChangesType setDelete(array $delete)
 * @method array getReadFlagChange()
 * @method SyncFolderItemsChangesType setReadFlagChange(array $readFlagChange)
 */
class SyncFolderItemsChangesType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $create = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $update = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderItemsDeleteType[]
     */
    protected $delete = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderItemsReadFlagType[]
     */
    protected $readFlagChange = null;
}
