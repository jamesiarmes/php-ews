<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class MailboxStatisticsSearchResultType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserMailboxType $userMailbox
     */
    protected $userMailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\KeywordStatisticsSearchResultType
     * $keywordStatisticsSearchResult
     */
    protected $keywordStatisticsSearchResult = null;
}
