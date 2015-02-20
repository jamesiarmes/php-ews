<?php
/**
 * Contains TargetFolderIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Indicates the folder that is targeted for actions that use folders.
 *
 * @package jamesiarmes\EWS\Types
 */
class TargetFolderIdType extends EWSType
{
    /**
     * Identifies folders that can be referenced by name.
     *
     * @since Exchange 2007
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of the context folder.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $FolderId;
}
