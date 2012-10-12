<?php
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
class EWSType_ArrayOfTransitionsGroupsType extends EWSType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @var EWSType_ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
