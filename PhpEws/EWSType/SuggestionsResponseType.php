<?php
/**
 * Definition of the SuggestionsResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends EWSType
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
