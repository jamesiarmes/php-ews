<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Represents a time zone transition.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TransitionType type.
 */
class TransitionType extends DataType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;
}
