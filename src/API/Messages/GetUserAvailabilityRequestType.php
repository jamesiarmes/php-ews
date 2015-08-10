<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method GetUserAvailabilityRequestType getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone($timeZone)
 * @method GetUserAvailabilityRequestType getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray($mailboxDataArray)
 * @method GetUserAvailabilityRequestType getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType
 * setFreeBusyViewOptions($freeBusyViewOptions)
 * @method GetUserAvailabilityRequestType getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType
 * setSuggestionsViewOptions($suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZone $timeZone
     */
    protected $timeZone = null;

    /**
     * @property array $mailboxDataArray
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

