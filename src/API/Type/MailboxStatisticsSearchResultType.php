<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MailboxStatisticsSearchResultType
 *
 * Mailbox statistics search result.
 * XSD Type: MailboxStatisticsSearchResultType
 *
 * @method UserMailboxType getUserMailbox()
 * @method MailboxStatisticsSearchResultType setUserMailbox(UserMailboxType $userMailbox)
 * @method KeywordStatisticsSearchResultType getKeywordStatisticsSearchResult()
 * @method MailboxStatisticsSearchResultType setKeywordStatisticsSearchResult(KeywordStatisticsSearchResultType $keywordStatisticsSearchResult)
 */
class MailboxStatisticsSearchResultType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserMailboxType
     */
    protected $userMailbox = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\KeywordStatisticsSearchResultType
     */
    protected $keywordStatisticsSearchResult = null;
}
