<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfResolutionType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of resolutions for an ambiguous name.
 *
 * @package php-ews\Array
 *
 * @todo Implement FindResponsePagingAttributes trait.
 */
class ArrayOfResolutionType extends ArrayType
{
    /**
     * Represents the next denominator to use for the next request when you are
     * using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator = array();

    /**
     * This attribute will be true if the current results contain the last item
     * in the query, so that additional paging is not needed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange = array();

    /**
     * Represents the next index that should be used for the next request when
     * you are using an indexed page view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $IndexedPagingOffset = array();

    /**
     * Represents the new numerator value to use for the next request when you
     * are using fraction page views.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset = array();

    /**
     * Contains a single resolved entity.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ResolutionType[]
     */
    public $Resolution = array();

    /**
     * Represents the total number of items in the view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView = array();
}
