<?php
/**
 * Contains EWSType_MailboxStatisticsSearchResultType.
 */

/**
 * Represents the results of a keyword search.
 *
 * @package php-ews\Types
 */
class EWSType_MailboxStatisticsSearchResultType extends EWSType
{
    /**
     * Contains a single keyword search result.
     *
     * @since Exchange 2013
     *
     * @var EWSType_KeywordStatisticsSearchResultType
     */
    public $KeywordStatisticsSearchResult;

    /**
     * Identifies the user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var EWSType_UserMailboxType
     */
    public $UserMailbox;
}
