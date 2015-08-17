<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method CreateManagedFolderRequestType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @property string[] $folderNames
     */
    protected $folderNames = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;


}

