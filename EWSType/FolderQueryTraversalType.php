<?php
/**
 * Definition of the FolderQueryTraversalType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Types of sub-tree traversal for deletion and enumeration
 */
class EWSType_FolderQueryTraversalType extends EWSType
{
    /**
     * Consider both direct children as well as all subfolders contained within
     * those children as well as the children's children, etc.
     *
     * @var string
     */
    const DEEP = 'Deep';

    /**
     * Consider only folders that are direct children of the parent folder(s) in
     * question
     *
     * @var string
     */
    const SHALLOW = 'Shallow';

    /**
     * Consider only those items that are soft deleted from the parent folders
     * specified
     *
     * @var string
     */
    const SOFT_DELETED = 'SoftDeleted';
}
