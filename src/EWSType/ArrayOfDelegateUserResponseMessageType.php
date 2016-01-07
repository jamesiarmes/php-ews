<?php
/**
 * Contains EWSType_ArrayOfDelegateUserResponseMessageType.
 */

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateResponseMessageType.
 */
class EWSType_ArrayOfDelegateUserResponseMessageType extends EWSType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DelegateUserResponseMessageType
     */
    public $DelegateUserResponseMessageType;
}
