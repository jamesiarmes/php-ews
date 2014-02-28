<?php
/**
 * Represents a time zone transition.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TransitionType type.
 */
class TransitionType extends PhpEws\EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;
}
