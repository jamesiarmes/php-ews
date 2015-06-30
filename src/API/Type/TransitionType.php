<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\TransitionType.
 */

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
     * @var \jamesiarmes\PEWS\API\Type\TransitionTargetType
     */
    public $To;
}
