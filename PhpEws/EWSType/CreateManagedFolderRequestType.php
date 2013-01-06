<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends EWSType
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
