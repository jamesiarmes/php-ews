<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method SuggestionsResponseType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage($responseMessage)
 * @method SuggestionsResponseType getSuggestionDayResultArray()
 * @method SuggestionsResponseType
 * setSuggestionDayResultArray($suggestionDayResultArray)
 */
class SuggestionsResponseType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Messages\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property array $suggestionDayResultArray
     */
    protected $suggestionDayResultArray = null;


}

