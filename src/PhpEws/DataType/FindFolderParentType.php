<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FindFolderParentType type
 */
class FindFolderParentType extends DataType
{
    /**
     * Folders property
     *
     * @var ArrayOfFoldersType
     */
    public $Folders;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;
}
