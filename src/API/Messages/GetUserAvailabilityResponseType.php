<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserAvailabilityResponseType
 *
 *
 * XSD Type: GetUserAvailabilityResponseType
 *
 * @method GetUserAvailabilityResponseType getFreeBusyResponseArray()
 * @method GetUserAvailabilityResponseType setFreeBusyResponseArray(array $freeBusyResponseArray)
 * @method GetUserAvailabilityResponseType getSuggestionsResponse()
 * @method GetUserAvailabilityResponseType setSuggestionsResponse(SuggestionsResponseType $suggestionsResponse)
 */
class GetUserAvailabilityResponseType extends Messages
{

    /**
     * @property \jamesiarmes\PEWS\API\Messages\FreeBusyResponseType[]
     * $freeBusyResponseArray
     */
    protected $freeBusyResponseArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\Messages\SuggestionsResponseType
     * $suggestionsResponse
     */
    protected $suggestionsResponse = null;


}

