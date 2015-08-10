<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindItemParentType
 *
 *
 * XSD Type: FindItemParentType
 *
 * @method FindItemParentType getIndexedPagingOffset()
 * @method FindItemParentType setIndexedPagingOffset($indexedPagingOffset)
 * @method FindItemParentType getNumeratorOffset()
 * @method FindItemParentType setNumeratorOffset($numeratorOffset)
 * @method FindItemParentType getAbsoluteDenominator()
 * @method FindItemParentType setAbsoluteDenominator($absoluteDenominator)
 * @method FindItemParentType getIncludesLastItemInRange()
 * @method FindItemParentType setIncludesLastItemInRange($includesLastItemInRange)
 * @method FindItemParentType getTotalItemsInView()
 * @method FindItemParentType setTotalItemsInView($totalItemsInView)
 * @method FindItemParentType getItems()
 * @method FindItemParentType setItems($items)
 * @method FindItemParentType getGroups()
 * @method FindItemParentType setGroups($groups)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfRealItemsType $items
     */
    protected $items = null;

    /**
     * @property array $groups
     */
    protected $groups = null;


}

