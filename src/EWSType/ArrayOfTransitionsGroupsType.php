<?php
/**
 * Contains EWSType_ArrayOfTransitionsGroupsType.
 */

/**
 * Represents an array of time zone transition groups.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfTransitionsGroupsType extends EWSType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
