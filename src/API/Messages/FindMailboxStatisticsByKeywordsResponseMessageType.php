<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method FindMailboxStatisticsByKeywordsResponseMessageType
 * getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType
 * setMailboxStatisticsSearchResult($mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MailboxStatisticsSearchResultType
     * $mailboxStatisticsSearchResult
     */
    protected $mailboxStatisticsSearchResult = null;


}

