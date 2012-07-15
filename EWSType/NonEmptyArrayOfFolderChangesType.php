<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 */
class EWSType_NonEmptyArrayOfFolderChangesType extends EWSType
{
    /**
     * FolderChange property
     *
     * @var EWSType_FolderChangeType
     */
    public $FolderChange;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderChange',
                'required' => false,
                'type' => 'FolderChangeType',
            ),
        );
    }
}
