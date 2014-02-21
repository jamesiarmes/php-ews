<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends PhpEws\EWSType
{
    /**
     * FolderNames property
     *
     * @var NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
