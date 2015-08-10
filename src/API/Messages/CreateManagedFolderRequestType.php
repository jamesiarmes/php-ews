<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames($folderNames)
 * @method CreateManagedFolderRequestType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox($mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @property array $folderNames
     */
    protected $folderNames = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;


}

