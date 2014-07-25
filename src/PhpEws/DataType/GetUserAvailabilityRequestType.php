<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetUserAvailabilityRequestType type
 */
class GetUserAvailabilityRequestType extends DataType
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * MailboxDataArray property
     *
     * @var ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * FreeBusyViewOptions property
     *
     * @var FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * SuggestionsViewOptions property
     *
     * @var SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;
}
