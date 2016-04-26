<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyChangesType
 *
 *
 * XSD Type: SyncFolderHierarchyChangesType
 *
 * @method SyncFolderHierarchyChangesType addCreate(SyncFolderHierarchyCreateOrUpdateType $create)
 * @method SyncFolderHierarchyCreateOrUpdateType[] getCreate()
 * @method SyncFolderHierarchyChangesType setCreate(array $create)
 * @method SyncFolderHierarchyChangesType addUpdate(SyncFolderHierarchyCreateOrUpdateType $update)
 * @method SyncFolderHierarchyCreateOrUpdateType[] getUpdate()
 * @method SyncFolderHierarchyChangesType setUpdate(array $update)
 * @method SyncFolderHierarchyChangesType addDelete(SyncFolderHierarchyDeleteType $delete)
 * @method SyncFolderHierarchyDeleteType[] getDelete()
 * @method SyncFolderHierarchyChangesType setDelete(array $delete)
 */
class SyncFolderHierarchyChangesType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     */
    protected $create = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyCreateOrUpdateType[]
     */
    protected $update = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SyncFolderHierarchyDeleteType[]
     */
    protected $delete = null;
}
