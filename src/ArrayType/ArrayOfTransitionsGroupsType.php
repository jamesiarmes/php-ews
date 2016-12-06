<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsGroupsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of time zone transition groups.
 *
 * @package php-ews\Array
 */
class ArrayOfTransitionsGroupsType extends ArrayType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsType[]
     */
    public $TransitionsGroup = array();
}
