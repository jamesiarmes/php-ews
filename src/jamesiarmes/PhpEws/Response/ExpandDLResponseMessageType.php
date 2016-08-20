<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\ExpandDLResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single ExpandDL operation request.
 *
 * @package php-ews\Response
 *
 * @todo Create a FindResponsePagingAttributes trait.
 */
class ExpandDLResponseMessageType extends ResponseMessageType
{
    /**
     * Represents the next denominator to use for the next request when doing\
     * fractional paging.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * Contains an array of mailboxes that are contained in a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfDLExpansionType
     */
    public $DLExpansion;

    /**
     * Indicates that additional paging is not needed.
     *
     * This attribute will be true if the current results contain the last item
     * in the query.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Represents the next index that should be used for the next request when
     * an indexed paging view is used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $IndexedPagingOffset;

    /**
     * Represents the new numerator value to use for the next request when
     * fraction page views are used.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * Represents the total number of items that pass the restriction.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
