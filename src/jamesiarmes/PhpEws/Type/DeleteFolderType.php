<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DeleteFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to delete folders from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 */
class DeleteFolderType extends BaseRequestType
{
    /**
     * Describes how a folder is deleted. This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Enumeration\DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to delete.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
