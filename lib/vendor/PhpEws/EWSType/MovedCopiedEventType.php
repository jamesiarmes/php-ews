<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends EWSType
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
