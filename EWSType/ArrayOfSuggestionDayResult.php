<?php
/**
 * Contains EWSType_ArrayOfSuggestionDayResult.
 */

/**
 * Represents an array of meeting suggestions organized by date.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfSuggestionDayResult extends EWSType
{
    /**
     * Represents a single day that contains suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SuggestionDayResult
     */
    public $SuggestionDayResult;
}
