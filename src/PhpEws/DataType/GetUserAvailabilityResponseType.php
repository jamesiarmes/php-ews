<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends DataType
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
