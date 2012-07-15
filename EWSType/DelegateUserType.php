<?php
/**
 * Definition of the DelegateUserType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DelegateUserType type
 */
class EWSType_DelegateUserType extends EWSType
{
    /**
     * UserId property
     *
     * @var EWSType_UserIdType
     */
    public $UserId;

    /**
     * DelegatePermissions property
     *
     * @var EWSType_DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * ReceiveCopiesOfMeetingMessages property
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * ViewPrivateItems property
     *
     * @var boolean
     */
    public $ViewPrivateItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UserId',
                'required' => false,
                'type' => 'UserIdType',
            ),
            array(
                'name' => 'DelegatePermissions',
                'required' => false,
                'type' => 'DelegatePermissionsType',
            ),
            array(
                'name' => 'ReceiveCopiesOfMeetingMessages',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'ViewPrivateItems',
                'required' => false,
                'type' => 'boolean',
            ),
        );
    }
}
