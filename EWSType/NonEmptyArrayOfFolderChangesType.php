<?php
/**
 * Contains EWSType_NonEmptyArrayOfFolderChangesType.
 */

/**
 * Represents a collection of changes for a folder.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfFolderChangesType extends EWSType
{
    /**
     * Represents a single change to be performed on a single folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderChangeType
     */
    public $FolderChange;
}
