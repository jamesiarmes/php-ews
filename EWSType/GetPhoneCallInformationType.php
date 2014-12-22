<?php
/**
 * Contains EWSType_GetPhoneCallInformationType.
 */

/**
 * Represents a request to get telephone call information.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetPhoneCallInformationType extends EWSType
{
    /**
     * Specifies the identifier of a phone call.
     *
     * @since Exchange 2010
     *
     * @var EWSType_PhoneCallIdType
     */
    public $PhoneCallId;
}
