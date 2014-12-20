<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\TransitionTargetKindType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Defines the kind of a transition.
 *
 * @package php-ews\Enumeration
 */
class TransitionTargetKindType extends Enumeration
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
}
