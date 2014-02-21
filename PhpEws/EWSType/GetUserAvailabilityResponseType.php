<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends PhpEws\EWSType
{
    /**
     * FreeBusyResponseArray property
     *
     * @var ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * @var SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
