<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPeopleType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of persona data.
 *
 * @package php-ews\Array
 */
class ArrayOfPeopleType extends ArrayType
{
    /**
     * Specifies a set of persona data.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaType[]
     */
    public $Persona = array();
}
