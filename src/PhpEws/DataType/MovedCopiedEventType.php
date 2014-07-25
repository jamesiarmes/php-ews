<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends DataType
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
