<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupedItemsType
 *
 *
 * XSD Type: GroupedItemsType
 *
 * @method GroupedItemsType getGroupIndex()
 * @method GroupedItemsType setGroupIndex(string $groupIndex)
 * @method GroupedItemsType getItems()
 * @method GroupedItemsType setItems(ArrayOfRealItemsType $items)
 */
class GroupedItemsType extends Type
{

    /**
     * @property string $groupIndex
     */
    protected $groupIndex = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType $items
     */
    protected $items = null;


}

