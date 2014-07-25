<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FindItemParentType type
 */
class FindItemParentType extends DataType
{
    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Groups property
     *
     * @var ArrayOfGroupedItemsType
     */
    public $Groups;

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
