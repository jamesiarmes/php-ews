<?php
/**
 * Contains ConferenceTypeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the type of conferencing that is performed with a calendar item.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ConferenceTypeType extends EWSType
{
    /**
     * The meeting is offline.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const CHAT = 2;

    /**
     * The meeting is an Internet meeting.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const NET_MEETING = 0;

    /**
     * The meeting is an Internet show (such as a webinar).
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const NET_SHOW = 1;

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
