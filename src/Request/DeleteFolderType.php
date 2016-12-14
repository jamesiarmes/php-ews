<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DeleteFolderType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to delete folders from a mailbox in the Exchange store.
 *
 * @package php-ews\Request
 */
class DeleteFolderType extends BaseRequestType
{
    /**
     * Describes how a folder is deleted. This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to delete.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
