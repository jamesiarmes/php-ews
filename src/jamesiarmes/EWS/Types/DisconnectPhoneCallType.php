<?php
/**
 * Contains DisconnectPhoneCallType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to disconnect a call.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class DisconnectPhoneCallType extends EWSType
{
    /**
     * Specifies the identifier of the call to disconnect.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var PhoneCallIdType
     */
    public $PhoneCallId;
}
