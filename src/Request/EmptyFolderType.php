<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\EmptyFolderType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to empty a folder in a mailbox in the Exchange store.
 *
 * Optionally, subfolders can also be deleted when the folder is emptied.
 *
 * @package php-ews\Request
 */
class EmptyFolderType extends BaseRequestType
{
    /**
     * Specifies whether subfolders are to be deleted.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $DeleteSubFolders;

    /**
     * Specifies how a folder is emptied.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DisposalType
     */
    public $DeleteType;

    /**
     * Array of folder identifiers that are used to identify folders to delete.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
