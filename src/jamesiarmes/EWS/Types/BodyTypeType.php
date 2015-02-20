<?php
/**
 * Contains BodyTypeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies the type of an item body.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class BodyTypeType extends EWSType
{
    /**
     * Indicates that the body is in HTML.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Indicates that the body is in text.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TEXT = 'Text';

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
