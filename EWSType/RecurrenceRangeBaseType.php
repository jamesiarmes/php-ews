<?php
/**
 * Definition of the RecurrenceRangeBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RecurrenceRangeBaseType type
 */
class EWSType_RecurrenceRangeBaseType extends EWSType
{
    /**
     * StartDate property
     *
     * @var EWSType_date
     */
    public $StartDate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'StartDate',
                'required' => false,
                'type' => 'date',
            ),
        );
    }
}
