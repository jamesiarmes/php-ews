<?php
/**
 * Definition of the SyncFolderItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsType type
 */
class EWSType_SyncFolderItemsType extends EWSType
{
    /**
     * ItemShape property
     *
     * @var EWSType_ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * SyncFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * Ignore property
     *
     * @var EWSType_ArrayOfBaseItemIdsType
     */
    public $Ignore;

    /**
     * MaxChangesReturned property
     *
     * @var EWSType_MaxSyncChangesReturnedType
     */
    public $MaxChangesReturned;
}
