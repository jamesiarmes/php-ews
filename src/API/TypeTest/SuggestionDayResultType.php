<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionDayResultType
 *
 *
 * XSD Type: SuggestionDayResult
 *
 * @method SuggestionDayResultType getDate()
 * @method SuggestionDayResultType setDate($date)
 * @method SuggestionDayResultType getDayQuality()
 * @method SuggestionDayResultType setDayQuality($dayQuality)
 * @method SuggestionDayResultType getSuggestionArray()
 * @method SuggestionDayResultType setSuggestionArray($suggestionArray)
 */
class SuggestionDayResultType extends Type
{

    /**
     * @property \DateTime $date
     */
    protected $date = null;

    /**
     * @property string $dayQuality
     */
    protected $dayQuality = null;

    /**
     * @property array $suggestionArray
     */
    protected $suggestionArray = null;


}

