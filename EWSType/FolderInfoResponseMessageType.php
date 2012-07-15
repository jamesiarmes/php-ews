<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FolderInfoResponseMessageType type
 */
class EWSType_FolderInfoResponseMessageType extends EWSType
{
    /**
     * Folders property
     *
     * @var EWSType_ArrayOfFoldersType
     */
    public $Folders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Folders',
                'required' => false,
                'type' => 'ArrayOfFoldersType',
            ),
        );
    }
}
