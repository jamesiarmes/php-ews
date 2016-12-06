<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfTimeZoneIdType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of time zone definition identifiers.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfTimeZoneIdType extends ArrayType
{
    /**
     * The element that identifies a single time zone definition.
     *
     * @since Exchange 2010
     *
     * @var string[]
     */
    public $Id = array();
}
