<?php
/**
 * Contains BasePointType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines whether a page of items or conversations will start from the
 * beginning or the end of a set.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class BasePointType extends EWSType
{
    /**
     * The paged view starts at the beginning of the found conversation or item
     * set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BEGINNING = 'Beginning';

    /**
     * The paged view starts at the end of the found conversation or item set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const END = 'End';

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
