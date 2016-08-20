<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindMailboxStatisticsByKeywordsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the response message for a FindMailboxStatisticsByKeywords
 * request.
 *
 * @package php-ews\Type
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends
    ResponseMessageType
{
    /**
     * Specifies the result of a mailbox search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxStatisticsSearchResultType
     */
    public $MailboxStatisticsSearchResult;
}
