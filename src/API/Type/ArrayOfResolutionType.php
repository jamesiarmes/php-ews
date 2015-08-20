<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfResolutionType
 *
 *
 * XSD Type: ArrayOfResolutionType
 *
 * @method ArrayOfResolutionType getIndexedPagingOffset()
 * @method ArrayOfResolutionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ArrayOfResolutionType getNumeratorOffset()
 * @method ArrayOfResolutionType setNumeratorOffset(integer $numeratorOffset)
 * @method ArrayOfResolutionType getAbsoluteDenominator()
 * @method ArrayOfResolutionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ArrayOfResolutionType getIncludesLastItemInRange()
 * @method ArrayOfResolutionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ArrayOfResolutionType getTotalItemsInView()
 * @method ArrayOfResolutionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfResolutionType getResolution()
 * @method ArrayOfResolutionType setResolution(array $resolution)
 */
class ArrayOfResolutionType extends Type
{

    /**
     * @property integer $indexedPagingOffset
     */
    protected $indexedPagingOffset = null;

    /**
     * @property integer $numeratorOffset
     */
    protected $numeratorOffset = null;

    /**
     * @property integer $absoluteDenominator
     */
    protected $absoluteDenominator = null;

    /**
     * @property boolean $includesLastItemInRange
     */
    protected $includesLastItemInRange = null;

    /**
     * @property integer $totalItemsInView
     */
    protected $totalItemsInView = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ResolutionType[] $resolution
     */
    protected $resolution = null;
}
