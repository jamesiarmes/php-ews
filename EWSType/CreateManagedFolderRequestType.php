<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class EWSType_CreateManagedFolderRequestType extends EWSType
{
    /**
     * FolderNames property
     *
     * @var EWSType_NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderNames',
                'required' => false,
                'type' => 'NonEmptyArrayOfFolderNamesType',
            ),
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'EmailAddressType',
            ),
        );
    }
}
