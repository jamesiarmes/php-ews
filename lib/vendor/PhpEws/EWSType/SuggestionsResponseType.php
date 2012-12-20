<?php
/**
 * Definition of the SuggestionsResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SuggestionsResponseType type
 */
class EWSType_SuggestionsResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * @var EWSType_ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
