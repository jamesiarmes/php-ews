<?php
/**
 * Contains EWSType_ArrayOfDelegateUserResponseMessageType.
 */

use jamesiarmes\PhpEws\Type\BaseDelegateResponseMessageType;

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfDelegateUserResponseMessageType extends
    BaseDelegateResponseMessageType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\DelegateUserResponseMessageType
     */
    public $DelegateUserResponseMessageType;
}
