<?php
/**
 * Represents a time zone transition.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TransitionType type.
 */
class EWSType_TransitionType extends EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;
}
