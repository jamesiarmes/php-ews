<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends DataType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * @var ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
