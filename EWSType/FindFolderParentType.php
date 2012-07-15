<?php
/**
 * Definition of the FindFolderParentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindFolderParentType type
 */
class EWSType_FindFolderParentType extends EWSType
{
    /**
     * Folders property
     *
     * @var EWSType_ArrayOfFoldersType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Folders',
                'required' => false,
                'type' => 'ArrayOfFoldersType',
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
