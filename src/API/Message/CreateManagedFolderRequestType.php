<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType addFolderNames(string $folderNames)
 * @method string[] getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $folderNames = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
