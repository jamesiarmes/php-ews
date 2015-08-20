<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

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
class GetUserAvailabilityResponseType extends Message
{

    /**
     * @property \jamesiarmes\PEWS\API\Message\FreeBusyResponseType[]
     * $freeBusyResponseArray
     */
    protected $freeBusyResponseArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\Message\SuggestionsResponseType
     * $suggestionsResponse
     */
    protected $suggestionsResponse = null;
}
