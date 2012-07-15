<?php
/**
 * Definition of the ArrayOfWorkingPeriod type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfWorkingPeriod type
 */
class EWSType_ArrayOfWorkingPeriod extends EWSType
{
    /**
     * WorkingPeriod property
     *
     * @var EWSType_WorkingPeriod
     */
    public $WorkingPeriod;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'WorkingPeriod',
                'required' => false,
                'type' => 'WorkingPeriod',
            ),
        );
    }
}
