<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method GetUserAvailabilityRequestType getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\jamesiarmes\PEWS\API\Type\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method GetUserAvailabilityRequestType getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\jamesiarmes\PEWS\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method GetUserAvailabilityRequestType getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\jamesiarmes\PEWS\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeZone $timeZone
     */
    protected $timeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\MailboxDataType[] $mailboxDataArray
     */
    protected $mailboxDataArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FreeBusyViewOptions $freeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SuggestionsViewOptions
     * $suggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;
}
