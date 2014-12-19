<?php
/**
 * Contains EWSType_TransitionTargetKindType.
 */

/**
 * Defines the kind of a transition.
 *
 * @package php-ews\Enumerations
 *
 * @todo Rename to EWSType_TransitionKindType
 */
class EWSType_TransitionTargetKindType extends EWSType
{
    /**
     * Specifies that the time zone transition target is a group of time zone
     * transitions.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const GROUP = 'Group';

    /**
     * Specifies that the time zone transition target is a time zone period.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PERIOD = 'Period';

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
