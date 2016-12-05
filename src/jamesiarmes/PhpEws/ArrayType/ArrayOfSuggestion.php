<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSuggestion.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestion extends ArrayType
{
    /**
     * Represents a single meeting suggestion.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\Suggestion[]
     */
    public $Suggestion = array();
}
