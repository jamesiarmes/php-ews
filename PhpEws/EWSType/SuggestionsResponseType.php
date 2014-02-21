<?php
/**
 * Definition of the SuggestionsResponseType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends PhpEws\EWSType
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
