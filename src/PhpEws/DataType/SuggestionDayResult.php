<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends DataType
{
    /**
     * Date property
     *
     * @var EWSType_dateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * @var EWSType_SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * @var EWSType_ArrayOfSuggestion
     */
    public $SuggestionArray;
}
