<?php

namespace jamesiarmes\PEWS\API\Type;

use Countable;
use ArrayAccess;
use IteratorAggregate;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindFolderParentType
 *
 *
 * XSD Type: FindFolderParentType
 *
 * @method integer getIndexedPagingOffset()
 * @method FindFolderParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method integer getNumeratorOffset()
 * @method FindFolderParentType setNumeratorOffset(integer $numeratorOffset)
 * @method integer getAbsoluteDenominator()
 * @method FindFolderParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method boolean isIncludesLastItemInRange()
 * @method boolean getIncludesLastItemInRange()
 * @method FindFolderParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method FindFolderParentType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfFoldersType getFolders()
 * @method FindFolderParentType setFolders(ArrayOfFoldersType $folders)
 */
class FindFolderParentType extends Type implements Countable, ArrayAccess, IteratorAggregate
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
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;

    public function count()
    {
        return count($this->folders);
    }

    public function offsetExists($offset)
    {
        return isset($this->folders[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->folders[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            array_push($this->folders, $value);
        } else {
            $this->folders[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->folders[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->folders->getIterator());
    }
}
