<?php
/**
 * Contains GetPhoneCallInformationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to get telephone call information.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetPhoneCallInformationType extends EWSType
{
    /**
     * Specifies the identifier of a phone call.
     *
     * @since Exchange 2010
     *
     * @var PhoneCallIdType
     */
    public $PhoneCallId;
}
