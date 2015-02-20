<?php
/**
 * Contains TraversalType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the type of traversal to use for a folder.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class TraversalType extends EWSYType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
