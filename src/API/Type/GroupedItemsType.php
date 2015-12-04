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
class GroupedItemsType extends Type implements \Countable, \ArrayAccess, \IteratorAggregate
{

    /**
     * @var string
     */
    protected $groupIndex = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;

    public function count()
    {
        return count($this->items);
    }

    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items->getIterator());
    }
}
