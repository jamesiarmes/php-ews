<?php
/**
 * Contains ArrayOfTransitionsGroupsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of time zone transition groups.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfTransitionsGroupsType extends EWSType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
