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
}
