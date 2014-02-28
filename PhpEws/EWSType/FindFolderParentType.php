<?php
/**
 * Definition of the FindFolderParentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FindFolderParentType type
 */
class FindFolderParentType extends PhpEws\EWSType
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
