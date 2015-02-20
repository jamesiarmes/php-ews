<?php
/**
 * Contains TransitionTargetType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies the target of the time zone transition.
 *
 * The target is either a time zone period or a group of time zone transitions.
 *
 * @package jamesiarmes\EWS\Types
 */
class TransitionTargetType extends EWSType
{
    /**
     * Unique identifier of the Period or TransitionsGroup that is the target of
     * the time zone transition.
     *
     * @var string
     */
    public $_;

    /**
     * Indicates whether the time zone transition target is a time zone period
     * or of a group of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var TransitionTargetKindType
     */
    public $Kind;
}
