<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\SearchMailboxesType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a SearchMailboxes request.
 *
 * @package php-ews\Request
 */
class SearchMailboxesType extends BaseRequestType
{
    /**
     * Indicates whether the search result should remove duplicate items.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $Deduplication;

    /**
     * Contains the language used for the search query.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Language;

    /**
     * Contains the direction for pagination in the search result.
     *
     * The value is Previous or Next.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SearchPageDirectionType
     */
    public $PageDirection;

    /**
     * Specifies the reference for a page item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $PageItemReference;

    /**
     * Contains the number of items to be returned in a single page for a search
     * result.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $PageSize;

    /**
     * Contains the requested property set to be returned in a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PreviewItemResponseShapeType
     */
    public $PreviewItemResponseShape;

    /**
     * Contains the type of search to perform.
     *
     * The type of search can be statistics only or preview only.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SearchResultType
     */
    public $ResultType;

    /**
     * Contains a list of mailboxes and associated queries for discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfMailboxQueriesType
     */
    public $SearchQueries;

    /**
     * Contains an item property used for sorting the search result.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\FieldOrderType
     */
    public $SortBy;
}
