<?php
/**
 * Definition of the ExpandDLResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExpandDLResponseMessageType type
 */
class EWSType_ExpandDLResponseMessageType extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DLExpansion',
                'required' => false,
                'type' => 'ArrayOfDLExpansionType',
            ),
            array(
                'name' => 'IndexedPagingOffset',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'NumeratorOffset',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'AbsoluteDenominator',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'IncludesLastItemInRange',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'TotalItemsInView',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
