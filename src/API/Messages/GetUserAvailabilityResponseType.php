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
 * @method GetUserAvailabilityResponseType
 * setFreeBusyResponseArray($freeBusyResponseArray)
 * @method GetUserAvailabilityResponseType getSuggestionsResponse()
 * @method GetUserAvailabilityResponseType
 * setSuggestionsResponse($suggestionsResponse)
 */
class GetUserAvailabilityResponseType extends Messages
{

    /**
     * @property array $freeBusyResponseArray
     */
    protected $freeBusyResponseArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\Messages\SuggestionsResponseType
     * $suggestionsResponse
     */
    protected $suggestionsResponse = null;


}

