<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindItemParentType
 *
 *
 * XSD Type: FindItemParentType
 *
 * @method FindItemParentType getIndexedPagingOffset()
 * @method FindItemParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method FindItemParentType getNumeratorOffset()
 * @method FindItemParentType setNumeratorOffset(integer $numeratorOffset)
 * @method FindItemParentType getAbsoluteDenominator()
 * @method FindItemParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method FindItemParentType getIncludesLastItemInRange()
 * @method FindItemParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method FindItemParentType getTotalItemsInView()
 * @method FindItemParentType setTotalItemsInView(integer $totalItemsInView)
 * @method FindItemParentType getItems()
 * @method FindItemParentType setItems(ArrayOfRealItemsType $items)
 * @method FindItemParentType getGroups()
 * @method FindItemParentType setGroups(array $groups)
 */
class FindItemParentType extends Type
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
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType $items
     */
    protected $items = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\GroupedItemsType[] $groups
     */
    protected $groups = null;


}

