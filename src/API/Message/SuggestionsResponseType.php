<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method array getSuggestionDayResultArray()
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SuggestionDayResultType[]
     */
    protected $suggestionDayResultArray = null;
}
