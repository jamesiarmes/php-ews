<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method CreateManagedFolderRequestType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @property string[] $folderNames
     */
    protected $folderNames = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;


}

