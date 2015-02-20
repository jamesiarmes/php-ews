<?php
/**
 * Contains GetUserAvailabilityRequestType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the arguments used to obtain user availability information.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetUserAvailabilityRequestType extends EWSType
{
    /**
     * Specifies the type of free/busy information returned in the response.
     *
     * @since Exchange 2007
     *
     * @var FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * Contains a list of mailboxes to query for availability information.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * Contains the options for obtaining meeting suggestion information.
     *
     * @since Exchange 2007
     *
     * @var SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;

    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;
}
