<?php
/**
 * Definition of the ConflictResultsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConflictResultsType type
 */
class EWSType_ConflictResultsType extends EWSType
{
    /**
     * Count property
     *
     * @var integer
     */
    public $Count;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Count',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
