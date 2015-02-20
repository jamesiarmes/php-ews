<?php
/**
 * Contains ArrayOfSuggestion.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of meeting suggestions.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfSuggestion extends EWSType
{
    /**
     * Represents a single meeting suggestion.
     *
     * @since Exchange 2007
     *
     * @var Suggestion
     */
    public $Suggestion;
}
