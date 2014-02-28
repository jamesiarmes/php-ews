<?php
/**
 * Definition of the SuggestionDayResult type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends PhpEws\EWSType
{
    /**
     * Date property
     *
     * @var dateTime
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
