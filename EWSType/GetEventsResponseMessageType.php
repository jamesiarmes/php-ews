<?php
/**
 * Definition of the GetEventsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetEventsResponseMessageType type
 */
class EWSType_GetEventsResponseMessageType extends EWSType
{
    /**
     * Notification property
     *
     * @var EWSType_NotificationType
     */
    public $Notification;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Notification',
                'required' => false,
                'type' => 'NotificationType',
            ),
        );
    }
}
