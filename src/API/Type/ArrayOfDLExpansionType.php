<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfDLExpansionType
 *
 *
 * XSD Type: ArrayOfDLExpansionType
 *
 * @method ArrayOfDLExpansionType getIndexedPagingOffset()
 * @method ArrayOfDLExpansionType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method ArrayOfDLExpansionType getNumeratorOffset()
 * @method ArrayOfDLExpansionType setNumeratorOffset(integer $numeratorOffset)
 * @method ArrayOfDLExpansionType getAbsoluteDenominator()
 * @method ArrayOfDLExpansionType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method ArrayOfDLExpansionType getIncludesLastItemInRange()
 * @method ArrayOfDLExpansionType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method ArrayOfDLExpansionType getTotalItemsInView()
 * @method ArrayOfDLExpansionType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfDLExpansionType getMailbox()
 * @method ArrayOfDLExpansionType setMailbox(array $mailbox)
 */
class ArrayOfDLExpansionType extends Type
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
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $mailbox
     */
    protected $mailbox = null;
}
