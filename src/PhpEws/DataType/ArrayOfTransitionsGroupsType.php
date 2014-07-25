<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfTransitionsGroupsType type.
 */
class ArrayOfTransitionsGroupsType extends DataType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @var EWSType_ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
