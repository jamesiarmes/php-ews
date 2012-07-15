<?php
/**
 * Definition of the OccurrenceItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the OccurrenceItemIdType type
 */
class EWSType_OccurrenceItemIdType extends EWSType
{
    /**
     * RecurringMasterId property
     *
     * @var EWSType_DerivedItemIdType
     */
    public $RecurringMasterId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * InstanceIndex property
     *
     * @var integer
     */
    public $InstanceIndex;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RecurringMasterId',
                'required' => false,
                'type' => 'DerivedItemIdType',
            ),
            array(
                'name' => 'ChangeKey',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'InstanceIndex',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
