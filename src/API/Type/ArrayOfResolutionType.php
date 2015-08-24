<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfResolutionType
 *
 *
 * XSD Type: ArrayOfResolutionType
 *
 * @method integer getIndexedPagingOffset()
 * @method ArrayOfResolutionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method ArrayOfResolutionType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method ArrayOfResolutionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean isIncludesLastItemInRange()
 * @method boolean getIncludesLastItemInRange()
 * @method ArrayOfResolutionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method ArrayOfResolutionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfResolutionType addResolution(ResolutionType $resolution)
 * @method ResolutionType[] getResolution()
 * @method ArrayOfResolutionType setResolution(array $resolution)
 */
class ArrayOfResolutionType extends Type
{

    /**
     * @var integer
     */
    protected $indexedPagingOffset = null;

    /**
     * @var integer
     */
    protected $numeratorOffset = null;

    /**
     * @var integer
     */
    protected $absoluteDenominator = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var integer
     */
    protected $totalItemsInView = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ResolutionType[]
     */
    protected $resolution = null;
}
