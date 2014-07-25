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
     * @var \DateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * @var SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * @var ArrayOfSuggestion
     */
    public $SuggestionArray;
}
