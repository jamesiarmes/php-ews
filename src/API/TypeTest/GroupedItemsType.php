<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupedItemsType
 *
 *
 * XSD Type: GroupedItemsType
 *
 * @method GroupedItemsType getGroupIndex()
 * @method GroupedItemsType setGroupIndex($groupIndex)
 * @method GroupedItemsType getItems()
 * @method GroupedItemsType setItems($items)
 */
class GroupedItemsType extends Type
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

