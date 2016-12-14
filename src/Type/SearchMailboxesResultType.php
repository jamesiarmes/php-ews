<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SearchMailboxesResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the result of a SearchMailboxes request.
 *
 * @package php-ews\Type
 */
class SearchMailboxesResultType extends Type
{
    /**
     * Contains a list of mailboxes and associated queries for discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfMailboxQueriesType
     */
    public $SearchQueries;

    /**
     * Contains the type of search to perform.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SearchResultType
     */
    public $ResultType;

    /**
     * Specifies the total number of items in a search result.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $ItemCount;

    /**
     * Specifies the total size of one or more mailbox items.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $Size;

    /**
     * Specifies the number of pages returned in a search result pagination.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $PageItemCount;

    /**
     * Specifies the number of items to return in a search result pagination.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $PageItemSize;

    /**
     * Specifies a list of one or more KeywordStat elements.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfKeywordStatisticsSearchResultsType
     */
    public $KeywordStats;

    /**
     * Specifies a list of items available for preview.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchPreviewItemsType
     */
    public $Items;

    /**
     *
     *
     * @since Exchange 2013
     *
     * @var
     */
    public $FailedMailboxes;

    /**
     *
     *
     * @since Exchange 2013
     *
     * @var
     */
    public $Refiners;

    /**
     *
     *
     * @since Exchange 2013
     *
     * @var
     */
    public $MailboxStats;
}
