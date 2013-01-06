<?php
/**
 * Definition of the ExpandDLResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ExpandDLResponseMessageType type
 */
class ExpandDLResponseMessageType extends EWSType
{
    /**
     * DLExpansion property
     *
     * @var EWSType_ArrayOfDLExpansionType
     */
    public $DLExpansion;

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
