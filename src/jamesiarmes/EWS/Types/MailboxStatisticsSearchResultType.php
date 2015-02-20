<?php
/**
 * Contains MailboxStatisticsSearchResultType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the results of a keyword search.
 *
 * @package jamesiarmes\EWS\Types
 */
class MailboxStatisticsSearchResultType extends EWSType
{
    /**
     * Contains a single keyword search result.
     *
     * @since Exchange 2013
     *
     * @var KeywordStatisticsSearchResultType
     */
    public $KeywordStatisticsSearchResult;

    /**
     * Identifies the user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var UserMailboxType
     */
    public $UserMailbox;
}
