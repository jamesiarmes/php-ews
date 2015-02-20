<?php
/**
 * Contains DeleteFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to delete folders from a mailbox in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class DeleteFolderType extends EWSType
{
    /**
     * Describes how a folder is deleted. This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to delete.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
