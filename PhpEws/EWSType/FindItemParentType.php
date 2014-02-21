<?php
/**
 * Definition of the FindItemParentType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FindItemParentType type
 */
class FindItemParentType extends PhpEws\EWSType
{
    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Groups property
     *
     * @var ArrayOfGroupedItemsType
     */
    public $Groups;

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
