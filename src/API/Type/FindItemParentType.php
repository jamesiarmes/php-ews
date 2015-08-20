<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindItemParentType
 *
 *
 * XSD Type: FindItemParentType
 *
 * @method integer getIndexedPagingOffset()
 * @method FindItemParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method FindItemParentType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method FindItemParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean getIncludesLastItemInRange()
 * @method FindItemParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method FindItemParentType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfRealItemsType getItems()
 * @method FindItemParentType setItems(ArrayOfRealItemsType $items)
 * @method FindItemParentType addGroups(GroupedItemsType $groups)
 * @method GroupedItemsType[] getGroups()
 * @method FindItemParentType setGroups(array $groups)
 */
class FindItemParentType extends Type
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
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\GroupedItemsType[]
     */
    protected $groups = null;
}
