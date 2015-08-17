<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class SuggestionDayResultType extends TypeTest
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
     * @property \jamesiarmes\PEWS\API\TypeTest\SuggestionType[] $suggestionArray
     */
    protected $suggestionArray = null;


}

