<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSuggestionDayResult.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions organized by date.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestionDayResult extends ArrayType
{
    /**
     * Represents a single day that contains suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuggestionDayResult[]
     */
    public $SuggestionDayResult = array();
}
