<?php
/**
 * Definition of the FindItemParentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindItemParentType type
 */
class EWSType_FindItemParentType extends EWSType
{
    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Groups property
     *
     * @var EWSType_ArrayOfGroupedItemsType
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
