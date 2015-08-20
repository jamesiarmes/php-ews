<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method FindMailboxStatisticsByKeywordsResponseMessageType getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\jamesiarmes\PEWS\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\MailboxStatisticsSearchResultType
     * $mailboxStatisticsSearchResult
     */
    protected $mailboxStatisticsSearchResult = null;


}

