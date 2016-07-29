<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\CreateManagedFolderRequestType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add managed custom folders to a mailbox.
 *
 * @package php-ews\Request
 */
class CreateManagedFolderRequestType extends BaseRequestType
{
    /**
     * Contains an array of named managed folders to add to a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
