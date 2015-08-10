<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Type;

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
class GetUserAvailabilityResponseType extends Type
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

