<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPeriodsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of periods that define the time offset at different
 * stages of a time zone.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPeriodsType extends ArrayType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of a
     * time zone.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\PeriodType[]
     */
    public $Period = array();
}
