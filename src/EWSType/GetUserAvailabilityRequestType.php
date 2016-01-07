<?php
/**
 * Contains EWSType_GetUserAvailabilityRequestType.
 */

/**
 * Defines the arguments used to obtain user availability information.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetUserAvailabilityRequestType extends EWSType
{
    /**
     * Specifies the type of free/busy information returned in the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * Contains a list of mailboxes to query for availability information.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * Contains the options for obtaining meeting suggestion information.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SuggestionsViewOptionsType
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
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;
}
