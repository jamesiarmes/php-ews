<?php
/**
 * Contains EWSType_BaseDelegateResponseMessageType.
 */

/**
 * Base class for delegate response messages.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateResponseMessageType.
 */
abstract class EWSType_BaseDelegateResponseMessageType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
