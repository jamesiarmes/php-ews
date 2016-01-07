<?php
/**
 * Contains EWSType_UpdateFolderType.
 */

/**
 * Represents the operation that is used to update properties for a specified
 * folder.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_UpdateFolderType extends EWSType
{
    /**
     * Contains a collection of changes for a specified folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
