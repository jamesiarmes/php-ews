<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionDayResultType
 *
 *
 * XSD Type: SuggestionDayResult
 *
 * @method SuggestionDayResultType getDate()
 * @method SuggestionDayResultType setDate(\DateTime $date)
 * @method SuggestionDayResultType getDayQuality()
 * @method SuggestionDayResultType setDayQuality(string $dayQuality)
 * @method SuggestionDayResultType getSuggestionArray()
 * @method SuggestionDayResultType setSuggestionArray(array $suggestionArray)
 */
class SuggestionDayResultType extends Type
{

    /**
     * @property \DateTime $date
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @property string $dayQuality
     */
    protected $dayQuality = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SuggestionType[] $suggestionArray
     */
    protected $suggestionArray = null;
}
