<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method GetUserAvailabilityRequestType getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\jamesiarmes\PEWS\API\TypeTest\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method GetUserAvailabilityRequestType getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\jamesiarmes\PEWS\API\TypeTest\FreeBusyViewOptions $freeBusyViewOptions)
 * @method GetUserAvailabilityRequestType getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\jamesiarmes\PEWS\API\TypeTest\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZone $timeZone
     */
    protected $timeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MailboxDataType[] $mailboxDataArray
     */
    protected $mailboxDataArray = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FreeBusyViewOptions
     * $freeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SuggestionsViewOptions
     * $suggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;


}

