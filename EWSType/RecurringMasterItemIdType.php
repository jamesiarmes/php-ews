<?php
/**
 * Definition of the RecurringMasterItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RecurringMasterItemIdType type
 */
class EWSType_RecurringMasterItemIdType extends EWSType
{
    /**
     * OccurrenceId property
     *
     * @var EWSType_DerivedItemIdType
     */
    public $OccurrenceId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'OccurrenceId',
                'required' => false,
                'type' => 'DerivedItemIdType',
            ),
            array(
                'name' => 'ChangeKey',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
