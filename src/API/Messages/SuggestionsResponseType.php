<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method SuggestionsResponseType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method SuggestionsResponseType getSuggestionDayResultArray()
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Messages
{

    /**
     * @property \jamesiarmes\PEWS\API\Messages\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SuggestionDayResultType[]
     * $suggestionDayResultArray
     */
    protected $suggestionDayResultArray = null;


}

