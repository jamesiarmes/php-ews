<?php
/**
 * Definition of the ItemQueryTraversalType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Types of sub-tree traversal for deletion and enumeration
 */
class ItemQueryTraversalType extends EWSType
{
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
