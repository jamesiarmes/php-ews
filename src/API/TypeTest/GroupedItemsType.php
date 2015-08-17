<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class GroupedItemsType extends TypeTest
{

    /**
     * @property string $groupIndex
     */
    protected $groupIndex = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfRealItemsType $items
     */
    protected $items = null;


}

