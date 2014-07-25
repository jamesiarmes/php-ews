<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends DataType
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
