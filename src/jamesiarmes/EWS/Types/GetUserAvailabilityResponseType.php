<?php
/**
 * Contains GetUserAvailabilityResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the properties that define user availability information or suggested
 * meeting time information.
 *
 * @package jamesiarmes\EWS\Types
 */
class GetUserAvailabilityResponseType extends EWSType
{
    /**
     * FContains the requested users' availability information and the response
     * status.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * Contains response status information and suggestion data for requested
     * meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
