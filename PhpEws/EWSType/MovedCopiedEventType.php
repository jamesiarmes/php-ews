<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MovedCopiedEventType type
 */
class EWSType_MovedCopiedEventType extends EWSType
{
    /**
     * OldFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $OldParentFolderId;
}
