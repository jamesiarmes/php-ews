<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PersonaResponseShapeType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a set of properties for a persona.
 *
 * @package php-ews\Type
 */
class PersonaResponseShapeType extends Type
{
    /**
     * Identifies additional properties.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the set of properties to return in an item or folder response.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
