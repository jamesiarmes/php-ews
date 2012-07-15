<?php
/**
 * Definition of the GroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupByType type
 */
class EWSType_GroupByType extends EWSType
{
    /**
     * FieldURI property
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var EWSType_AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FieldURI',
                'required' => false,
                'type' => 'PathToUnindexedFieldType',
            ),
            array(
                'name' => 'IndexedFieldURI',
                'required' => false,
                'type' => 'PathToIndexedFieldType',
            ),
            array(
                'name' => 'ExtendedFieldURI',
                'required' => false,
                'type' => 'PathToExtendedFieldType',
            ),
            array(
                'name' => 'AggregateOn',
                'required' => false,
                'type' => 'AggregateOnType',
            ),
            array(
                'name' => 'Order',
                'required' => true,
                'type' => 'SortDirectionType',
            ),
        );
    }
}
