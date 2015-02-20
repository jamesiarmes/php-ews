<?php
/**
 * Contains ArrayOfDelegateUserResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateResponseMessageType.
 */
class ArrayOfDelegateUserResponseMessageType extends EWSType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchange 2007 SP1
     *
     * @var DelegateUserResponseMessageType
     */
    public $DelegateUserResponseMessageType;
}
