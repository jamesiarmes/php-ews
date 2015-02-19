<?php
/**
 * Contains EWSType_ArrayOfSuggestion.
 */

/**
 * Represents an array of meeting suggestions.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfSuggestion extends EWSType
{
    /**
     * Represents a single meeting suggestion.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\Suggestion
     */
    public $Suggestion;
}
