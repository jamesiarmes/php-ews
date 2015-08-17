<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MailboxStatisticsSearchResultType
 *
 * Mailbox statistics search result.
 * XSD Type: MailboxStatisticsSearchResultType
 *
 * @method MailboxStatisticsSearchResultType getUserMailbox()
 * @method MailboxStatisticsSearchResultType setUserMailbox(UserMailboxType $userMailbox)
 * @method MailboxStatisticsSearchResultType getKeywordStatisticsSearchResult()
 * @method MailboxStatisticsSearchResultType setKeywordStatisticsSearchResult(KeywordStatisticsSearchResultType $keywordStatisticsSearchResult)
 */
class MailboxStatisticsSearchResultType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserMailboxType $userMailbox
     */
    protected $userMailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\KeywordStatisticsSearchResultType
     * $keywordStatisticsSearchResult
     */
    protected $keywordStatisticsSearchResult = null;


}

