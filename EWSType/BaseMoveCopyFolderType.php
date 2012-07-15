<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class EWSType_BaseMoveCopyFolderType extends EWSType
{
    /**
     * ToFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ToFolderId',
                'required' => false,
                'type' => 'TargetFolderIdType',
            ),
            array(
                'name' => 'FolderIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfBaseFolderIdsType',
            ),
        );
    }
}
