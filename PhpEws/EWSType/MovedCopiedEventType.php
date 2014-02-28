<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends PhpEws\EWSType
{
    /**
     * OldFolderId property
     *
     * @var FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var FolderIdType
     */
    public $OldParentFolderId;
}
