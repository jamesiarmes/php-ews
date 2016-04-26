<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\MailboxStatisticsSearchResultType getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\jamesiarmes\PEWS\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\MailboxStatisticsSearchResultType
     */
    protected $mailboxStatisticsSearchResult = null;
}
