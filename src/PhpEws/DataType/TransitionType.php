<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TransitionType type.
 */
class TransitionType extends DataType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;
}
