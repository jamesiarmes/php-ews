<?php
/**
 * Contains EWSType_ArrayOfResolutionType.
 */

/**
 * Defines an array of resolutions for an ambiguous name.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfResolutionType extends EWSType
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
     * This attribute will be true if the current results contain the last item
     * in the query, so that additional paging is not needed.
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
     * @var integer
     */
    public $IndexedPagingOffset;

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
     * Contains a single resolved entity.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResolutionType
     */
    public $Resolution;

    /**
     * Represents the total number of items in the view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
