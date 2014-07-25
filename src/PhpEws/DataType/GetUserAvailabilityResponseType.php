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
