<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ExpandDLResponseMessageType type
 */
class ExpandDLResponseMessageType extends DataType
{
    /**
     * DLExpansion property
     *
     * @var ArrayOfDLExpansionType
     */
    public $DLExpansion;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;
}
