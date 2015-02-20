<?php
/**
 * Contains ArrayOfSuggestionDayResult.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of meeting suggestions organized by date.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfSuggestionDayResult extends EWSType
{
    /**
     * Represents a single day that contains suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var SuggestionDayResult
     */
    public $SuggestionDayResult;
}
