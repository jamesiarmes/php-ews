<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MailboxStatisticsSearchResultType
 *
 * Mailbox statistics search result.
 * XSD Type: MailboxStatisticsSearchResultType
 *
 * @method MailboxStatisticsSearchResultType getUserMailbox()
 * @method MailboxStatisticsSearchResultType setUserMailbox($userMailbox)
 * @method MailboxStatisticsSearchResultType getKeywordStatisticsSearchResult()
 * @method MailboxStatisticsSearchResultType
 * setKeywordStatisticsSearchResult($keywordStatisticsSearchResult)
 */
class MailboxStatisticsSearchResultType extends Type
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

