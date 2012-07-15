<?php
/**
 * Definition of the SendNotificationResultType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SendNotificationResultType type
 */
class EWSType_SendNotificationResultType extends EWSType
{
    /**
     * SubscriptionStatus property
     *
     * @var EWSType_SubscriptionStatusType
     */
    public $SubscriptionStatus;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SubscriptionStatus',
                'required' => false,
                'type' => 'SubscriptionStatusType',
            ),
        );
    }
}
