<?php
/**
 * Contains NonEmptyArrayOfFolderChangesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of changes for a folder.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfFolderChangesType extends EWSType
{
    /**
     * Represents a single change to be performed on a single folder.
     *
     * @since Exchange 2007
     *
     * @var FolderChangeType
     */
    public $FolderChange;
}
