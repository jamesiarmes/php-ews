<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MailboxStatisticsSearchResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the results of a keyword search.
 *
 * @package php-ews\Type
 */
class MailboxStatisticsSearchResultType extends Type
{
    /**
     * Contains a single keyword search result.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\KeywordStatisticsSearchResultType
     */
    public $KeywordStatisticsSearchResult;

    /**
     * Identifies the user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\UserMailboxType
     */
    public $UserMailbox;
}
