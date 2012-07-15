<?php
/**
 * Definition of the BaseObjectChangedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseObjectChangedEventType type
 */
class EWSType_BaseObjectChangedEventType extends EWSType
{
    /**
     * TimeStamp property
     *
     * @var EWSType_dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'TimeStamp',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'FolderId',
                'required' => false,
                'type' => 'FolderIdType',
            ),
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'ParentFolderId',
                'required' => false,
                'type' => 'FolderIdType',
            ),
        );
    }
}
