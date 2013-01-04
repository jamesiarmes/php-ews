<?php
/**
 * Represents a time zone transition.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TransitionType type.
 */
class TransitionType extends EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;
}
