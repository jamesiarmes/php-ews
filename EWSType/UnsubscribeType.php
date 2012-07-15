<?php
/**
 * Definition of the UnsubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UnsubscribeType type
 */
class EWSType_UnsubscribeType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * @var EWSType_SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SubscriptionId',
                'required' => false,
                'type' => 'SubscriptionIdType',
            ),
        );
    }
}
