<?php
/**
 * Contains UpdateFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the operation that is used to update properties for a specified
 * folder.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class UpdateFolderType extends EWSType
{
    /**
     * Contains a collection of changes for a specified folder.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
