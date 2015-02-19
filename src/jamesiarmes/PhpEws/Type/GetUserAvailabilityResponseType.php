<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserAvailabilityResponseType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the properties that define user availability information or suggested
 * meeting time information.
 *
 * @package php-ews\Types
 */
class GetUserAvailabilityResponseType extends Type
{
    /**
     * FContains the requested users' availability information and the response
     * status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * Contains response status information and suggestion data for requested
     * meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
