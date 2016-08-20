<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TransitionType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Represents a time zone transition.
 *
 * @package php-ews\Type
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
     * @var \jamesiarmes\PhpEws\Type\TransitionTargetType
     */
    public $To;
}
