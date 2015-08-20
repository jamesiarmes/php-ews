<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindFolderParentType
 *
 *
 * XSD Type: FindFolderParentType
 *
 * @method FindFolderParentType getIndexedPagingOffset()
 * @method FindFolderParentType setIndexedPagingOffset(integer $indexedPagingOffset)
 * @method FindFolderParentType getNumeratorOffset()
 * @method FindFolderParentType setNumeratorOffset(integer $numeratorOffset)
 * @method FindFolderParentType getAbsoluteDenominator()
 * @method FindFolderParentType setAbsoluteDenominator(integer $absoluteDenominator)
 * @method FindFolderParentType getIncludesLastItemInRange()
 * @method FindFolderParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method FindFolderParentType getTotalItemsInView()
 * @method FindFolderParentType setTotalItemsInView(integer $totalItemsInView)
 * @method FindFolderParentType getFolders()
 * @method FindFolderParentType setFolders(ArrayOfFoldersType $folders)
 */
class FindFolderParentType extends Type
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
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfFoldersType $folders
     */
    protected $folders = null;
}
