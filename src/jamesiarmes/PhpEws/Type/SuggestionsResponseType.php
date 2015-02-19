<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SuggestionsResponseType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents response status information and suggestion data for requested
 * meeting suggestions.
 *
 * @package php-ews\Type
 */
class SuggestionsResponseType extends Type
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Contains an array of meeting suggestions organized by date.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
