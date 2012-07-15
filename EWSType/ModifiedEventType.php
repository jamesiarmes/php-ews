<?php
/**
 * Definition of the ModifiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ModifiedEventType type
 */
class EWSType_ModifiedEventType extends EWSType
{
    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UnreadCount',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
