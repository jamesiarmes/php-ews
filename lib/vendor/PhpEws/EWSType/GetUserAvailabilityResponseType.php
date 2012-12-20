<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends EWSType
{
    /**
     * FreeBusyResponseArray property
     *
     * @var EWSType_ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * @var EWSType_SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
