<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SyncFolderHierarchyChangesType
 *
 *
 * XSD Type: SyncFolderHierarchyChangesType
 *
 * @method array getCreate()
 * @method SyncFolderHierarchyChangesType setCreate(array $create)
 * @method array getUpdate()
 * @method SyncFolderHierarchyChangesType setUpdate(array $update)
 * @method array getDelete()
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
