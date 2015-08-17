<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class SyncFolderHierarchyChangesType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderHierarchyCreateOrUpdateType[]
     * $create
     */
    protected $create = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderHierarchyCreateOrUpdateType[]
     * $update
     */
    protected $update = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SyncFolderHierarchyDeleteType[] $delete
     */
    protected $delete = null;


}

