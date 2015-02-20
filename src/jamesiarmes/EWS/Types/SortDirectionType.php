<?php
/**
 * Contains SortDirectionType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a sort order direction.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class SortDirectionType extends EWSType
{
    /**
     * Items are sorted in ascending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DESCENDING = 'Descending';

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
