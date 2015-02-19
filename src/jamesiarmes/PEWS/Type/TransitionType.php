<?php
/**
 * Contains \jamesiarmes\PEWS\Type\TransitionType.
 */

namespace jamesiarmes\PEWS\Type;

use jamesiarmes\PEWS\Type;

/**
 * Represents a time zone transition.
 *
 * @package php-ews\Types
 *
 * @todo Alter RecurringDateTransitionType to extend this class.
 */
class TransitionType extends Type
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Type\TransitionTargetType
     */
    public $To;
}
