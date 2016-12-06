<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetUserAvailabilityResponseType.
 */

namespace jamesiarmes\PhpEws\Response;

use \jamesiarmes\PhpEws\Response;

/**
 * Defines the properties that define user availability information or suggested
 * meeting time information.
 *
 * @package php-ews\Response
 */
class GetUserAvailabilityResponseType extends Response
{
    /**
     * FContains the requested users' availability information and the response
     * status.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfFreeBusyResponse
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
