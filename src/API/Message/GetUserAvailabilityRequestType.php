<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method \jamesiarmes\PEWS\API\Type\TimeZone getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\jamesiarmes\PEWS\API\Type\TimeZone $timeZone)
 * @method array getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method \jamesiarmes\PEWS\API\Type\FreeBusyViewOptions getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\jamesiarmes\PEWS\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method \jamesiarmes\PEWS\API\Type\SuggestionsViewOptions getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\jamesiarmes\PEWS\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TimeZone
     */
    protected $timeZone = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MailboxDataType[]
     */
    protected $mailboxDataArray = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FreeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SuggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;
}
