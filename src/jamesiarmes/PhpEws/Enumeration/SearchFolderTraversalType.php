<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\SearchFolderTraversalType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of traversal to use for a folder.
 *
 * @package php-ews\Enumeration
 */
class SearchFolderTraversalType extends Enumeration
{
    /**
     * Consider both direct children as well as all children contained within
     * those children as well as the children's children, etc.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DEEP = 'Deep';

    /**
     * Consider only direct children of the parent in question.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHALLOW = 'Shallow';
}
