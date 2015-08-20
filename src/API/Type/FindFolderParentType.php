<?php

namespace jamesiarmes\PEWS\API\Type;

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
 * @method boolean getIncludesLastItemInRange()
 * @method FindFolderParentType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method integer getTotalItemsInView()
 * @method FindFolderParentType setTotalItemsInView(integer $totalItemsInView)
 * @method ArrayOfFoldersType getFolders()
 * @method FindFolderParentType setFolders(ArrayOfFoldersType $folders)
 */
class FindFolderParentType extends Type
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
}
