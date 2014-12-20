<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ConversationQueryTraversalType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of traversal to use for a folder.
 *
 * @package php-ews\Enumeration
 */
class ConversationQueryTraversalType extends Enumeration
{
    /**
     * Consider both direct children as well as all children contained within
     * those children as well as the children's children, etc.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DEEP = 'Deep';

    /**
     * Consider only direct children of the parent in question.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SHALLOW = 'Shallow';
}
