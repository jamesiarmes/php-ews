<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindItemParentType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the results of a search of a single root folder during a FindItem
 * operation.
 *
 * @package php-ews\Type
 *
 * @todo Create a FindResponsePagingAttributes trait.
 */
class FindItemParentType extends Type
{
    /**
     * Represents the next denominator to use for the next request when you are
     * using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * Contains a collection of groups found that have the search and
     * aggregation criteria identified in the FindItem operation request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfGroupedItemsType
     */
    public $Groups;

    /**
     * Indicates whether the current results contain the last item in the query
     * so that additional paging is not needed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Represents the next index that should be used for the next request when
     * you are using an indexed page view.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $IndexedPagingOffset;

    /**
     * Contains an array of items found that have the search criteria identified
     * in the FindItem operation request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Represents the new numerator value to use for the next request when you
     * are using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * Represents the total number of items in the view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
