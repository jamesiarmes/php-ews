<?php
/**
 * Contains EWSType_SuggestionsResponseType.
 */

/**
 * Represents response status information and suggestion data for requested
 * meeting suggestions.
 *
 * @package php-ews\Types
 */
class EWSType_SuggestionsResponseType extends EWSType
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Contains an array of meeting suggestions organized by date.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
