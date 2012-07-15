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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemShape',
                'required' => false,
                'type' => 'ItemResponseShapeType',
            ),
            array(
                'name' => 'SyncFolderId',
                'required' => false,
                'type' => 'TargetFolderIdType',
            ),
            array(
                'name' => 'SyncState',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Ignore',
                'required' => false,
                'type' => 'ArrayOfBaseItemIdsType',
            ),
            array(
                'name' => 'MaxChangesReturned',
                'required' => false,
                'type' => 'MaxSyncChangesReturnedType',
            ),
        );
    }
}
