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
