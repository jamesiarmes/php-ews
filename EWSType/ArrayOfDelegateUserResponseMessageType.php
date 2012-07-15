<?php
/**
 * Definition of the ArrayOfDelegateUserResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfDelegateUserResponseMessageType type
 */
class EWSType_ArrayOfDelegateUserResponseMessageType extends EWSType
{
    /**
     * DelegateUserResponseMessageType property
     *
     * @var EWSType_DelegateUserResponseMessageType
     */
    public $DelegateUserResponseMessageType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DelegateUserResponseMessageType',
                'required' => false,
                'type' => 'DelegateUserResponseMessageType',
            ),
        );
    }
}
