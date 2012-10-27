<?php
/**
 * Contains EWSType_GetUserAvailabilityResponseType.
 */

/**
 * Defines the properties that define user availability information or suggested
 * meeting time information.
 *
 * @package php-ews\Types
 */
class EWSType_GetUserAvailabilityResponseType extends EWSType
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
     * @var EWSType_SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
