<?php
/**
 * Contains EWSType_TargetFolderIdType.
 */

/**
 * Indicates the folder that is targeted for actions that use folders.
 *
 * @package php-ews\Types
 */
class EWSType_TargetFolderIdType extends EWSType
{
    /**
     * Identifies folders that can be referenced by name.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of the context folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;
}
