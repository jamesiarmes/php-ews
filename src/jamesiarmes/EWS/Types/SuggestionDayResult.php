<?php
/**
 * Contains SuggestionDayResult.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single day that contains suggested meeting times.
 *
 * @package jamesiarmes\EWS\Types
 */
class SuggestionDayResult extends EWSType
{
    /**
     * Represents the date that contains the suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Date;

    /**
     * Represents the quality of the day for containing quality suggested
     * meeting times.
     *
     * @since Exchange 2007
     *
     * @var SuggestionQuality
     */
    public $DayQuality;

    /**
     * Contains an array of meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfSuggestion
     */
    public $SuggestionArray;
}
