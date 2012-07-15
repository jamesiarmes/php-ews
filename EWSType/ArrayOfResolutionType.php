<?php
/**
 * Definition of the ArrayOfResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfResolutionType type
 */
class EWSType_ArrayOfResolutionType extends EWSType
{
    /**
     * Resolution property
     *
     * @var EWSType_ResolutionType
     */
    public $Resolution;

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
                'name' => 'Resolution',
                'required' => false,
                'type' => 'ResolutionType',
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
