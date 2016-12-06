<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecurringTimeTransitionType;
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class for recurring time transitions.
 *
 * @package php-ews\Type
 */
abstract class RecurringTimeTransitionType extends TransitionType
{
    /**
     * The month in which the time transition occurs.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Month;

    /**
     * The duration offset from Coordinated Universal Time (UTC) for the time
     * transition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $TimeOffset;
}
