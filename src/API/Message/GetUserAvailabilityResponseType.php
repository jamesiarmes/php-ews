<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserAvailabilityResponseType
 *
 *
 * XSD Type: GetUserAvailabilityResponseType
 *
 * @method GetUserAvailabilityResponseType addFreeBusyResponseArray(FreeBusyResponseType $freeBusyResponseArray)
 * @method FreeBusyResponseType[] getFreeBusyResponseArray()
 * @method GetUserAvailabilityResponseType setFreeBusyResponseArray(array $freeBusyResponseArray)
 * @method SuggestionsResponseType getSuggestionsResponse()
 * @method GetUserAvailabilityResponseType setSuggestionsResponse(SuggestionsResponseType $suggestionsResponse)
 */
class GetUserAvailabilityResponseType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\FreeBusyResponseType[]
     */
    protected $freeBusyResponseArray = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\SuggestionsResponseType
     */
    protected $suggestionsResponse = null;
}
