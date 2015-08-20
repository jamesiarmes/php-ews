<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyChangesType
 *
 *
 * XSD Type: SyncFolderHierarchyChangesType
 *
 * @method SyncFolderHierarchyChangesType getCreate()
 * @method SyncFolderHierarchyChangesType setCreate(array $create)
 * @method SyncFolderHierarchyChangesType getUpdate()
 * @method SyncFolderHierarchyChangesType setUpdate(array $update)
 * @method SyncFolderHierarchyChangesType getDelete()
 * @method SyncFolderHierarchyChangesType setDelete(array $delete)
 */
class SyncFolderHierarchyChangesType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     * $create
     */
    protected $create = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     * $update
     */
    protected $update = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyDeleteType[] $delete
     */
    protected $delete = null;
}
