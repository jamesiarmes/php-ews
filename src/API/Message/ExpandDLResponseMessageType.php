<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ExpandDLResponseMessageType
 *
 *
 * XSD Type: ExpandDLResponseMessageType
 *
 * @method ExpandDLResponseMessageType getIndexedPagingOffset()
 * @method ExpandDLResponseMessageType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ExpandDLResponseMessageType getNumeratorOffset()
 * @method ExpandDLResponseMessageType setNumeratorOffset(integer $numeratorOffset)
 * @method ExpandDLResponseMessageType getAbsoluteDenominator()
 * @method ExpandDLResponseMessageType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ExpandDLResponseMessageType getIncludesLastItemInRange()
 * @method ExpandDLResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ExpandDLResponseMessageType getTotalItemsInView()
 * @method ExpandDLResponseMessageType setTotalItemsInView(integer $totalItemsInView)
 * @method ExpandDLResponseMessageType getDLExpansion()
 * @method ExpandDLResponseMessageType setDLExpansion(\jamesiarmes\PEWS\API\Type\ArrayOfDLExpansionType $dLExpansion)
 */
class ExpandDLResponseMessageType extends ResponseMessageType
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
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfDLExpansionType $dLExpansion
     */
    protected $dLExpansion = null;
}
