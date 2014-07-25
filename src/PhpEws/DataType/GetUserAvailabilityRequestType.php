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
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;

    /**
     * MailboxDataArray property
     *
     * @var EWSType_ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * FreeBusyViewOptions property
     *
     * @var EWSType_FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * SuggestionsViewOptions property
     *
     * @var EWSType_SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;
}
