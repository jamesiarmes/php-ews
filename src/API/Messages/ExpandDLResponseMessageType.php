<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ExpandDLResponseMessageType
 *
 *
 * XSD Type: ExpandDLResponseMessageType
 *
 * @method ExpandDLResponseMessageType getIndexedPagingOffset()
 * @method ExpandDLResponseMessageType setIndexedPagingOffset($indexedPagingOffset)
 * @method ExpandDLResponseMessageType getNumeratorOffset()
 * @method ExpandDLResponseMessageType setNumeratorOffset($numeratorOffset)
 * @method ExpandDLResponseMessageType getAbsoluteDenominator()
 * @method ExpandDLResponseMessageType setAbsoluteDenominator($absoluteDenominator)
 * @method ExpandDLResponseMessageType getIncludesLastItemInRange()
 * @method ExpandDLResponseMessageType
 * setIncludesLastItemInRange($includesLastItemInRange)
 * @method ExpandDLResponseMessageType getTotalItemsInView()
 * @method ExpandDLResponseMessageType setTotalItemsInView($totalItemsInView)
 * @method ExpandDLResponseMessageType getDLExpansion()
 * @method ExpandDLResponseMessageType setDLExpansion($dLExpansion)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfDLExpansionType $dLExpansion
     */
    protected $dLExpansion = null;


}

