<?php
/**
 * Contains CreateManagedFolderRequestType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to add managed custom folders to a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class CreateManagedFolderRequestType extends EWSType
{
    /**
     * Contains an array of named managed folders to add to a mailbox.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
