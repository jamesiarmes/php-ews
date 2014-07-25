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
