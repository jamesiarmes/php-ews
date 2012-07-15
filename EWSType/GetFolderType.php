<?php
/**
 * Definition of the GetFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetFolderType type
 */
class EWSType_GetFolderType extends EWSType
{
    /**
     * FolderShape property
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;

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
                'name' => 'FolderShape',
                'required' => false,
                'type' => 'FolderResponseShapeType',
            ),
            array(
                'name' => 'FolderIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfBaseFolderIdsType',
            ),
        );
    }
}
