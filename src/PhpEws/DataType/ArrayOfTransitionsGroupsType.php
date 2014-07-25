<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 */
class ArrayOfTransitionsGroupsType extends DataType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
