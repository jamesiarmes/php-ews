<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupedItemsType
 *
 *
 * XSD Type: GroupedItemsType
 *
 * @method string getGroupIndex()
 * @method GroupedItemsType setGroupIndex(string $groupIndex)
 * @method ArrayOfRealItemsType getItems()
 * @method GroupedItemsType setItems(ArrayOfRealItemsType $items)
 */
class GroupedItemsType extends Type
{

    /**
     * @var string
     */
    protected $groupIndex = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;
}
