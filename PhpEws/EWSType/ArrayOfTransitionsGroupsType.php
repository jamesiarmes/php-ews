<?php
/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfTransitionsGroupsType type.
 */
class ArrayOfTransitionsGroupsType extends PhpEws\EWSType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
