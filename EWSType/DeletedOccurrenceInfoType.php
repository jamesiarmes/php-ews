<?php
/**
 * Definition of the DeletedOccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DeletedOccurrenceInfoType type
 */
class EWSType_DeletedOccurrenceInfoType extends EWSType
{
    /**
     * Start property
     *
     * @var EWSType_dateTime
     */
    public $Start;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Start',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
