<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindFolderParentType
 *
 *
 * XSD Type: FindFolderParentType
 *
 * @method FindFolderParentType getIndexedPagingOffset()
 * @method FindFolderParentType setIndexedPagingOffset($indexedPagingOffset)
 * @method FindFolderParentType getNumeratorOffset()
 * @method FindFolderParentType setNumeratorOffset($numeratorOffset)
 * @method FindFolderParentType getAbsoluteDenominator()
 * @method FindFolderParentType setAbsoluteDenominator($absoluteDenominator)
 * @method FindFolderParentType getIncludesLastItemInRange()
 * @method FindFolderParentType
 * setIncludesLastItemInRange($includesLastItemInRange)
 * @method FindFolderParentType getTotalItemsInView()
 * @method FindFolderParentType setTotalItemsInView($totalItemsInView)
 * @method FindFolderParentType getFolders()
 * @method FindFolderParentType setFolders($folders)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfFoldersType $folders
     */
    protected $folders = null;


}

