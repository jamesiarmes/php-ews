<?php
/**
 * Contains BaseDelegateResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for delegate response messages.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateResponseMessageType.
 */
abstract class BaseDelegateResponseMessageType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
