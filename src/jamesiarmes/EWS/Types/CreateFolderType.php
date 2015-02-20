<?php
/**
 * Contains CreateFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to create a folder in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class CreateFolderType extends EWSType
{
    /**
     * The element that contains all the folders to create.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfFoldersType
     */
    public $Folders;

    /**
     * The element that identifies the location where the new folder is created.
     *
     * @since Exchange 2007
     *
     * @var TargetFolderIdType
     */
    public $ParentFolderId;
}
