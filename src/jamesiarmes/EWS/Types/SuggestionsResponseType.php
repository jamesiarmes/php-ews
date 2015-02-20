<?php
/**
 * Contains SuggestionsResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents response status information and suggestion data for requested
 * meeting suggestions.
 *
 * @package jamesiarmes\EWS\Types
 */
class SuggestionsResponseType extends EWSType
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Contains an array of meeting suggestions organized by date.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
