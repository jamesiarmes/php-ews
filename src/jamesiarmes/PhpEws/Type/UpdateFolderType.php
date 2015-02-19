<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UpdateFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the operation that is used to update properties for a specified
 * folder.
 *
 * @package php-ews\Types
 */
class UpdateFolderType extends BaseRequestType
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
