<?php
/**
 * Contains EWSType_DisconnectPhoneCallType.
 */

/**
 * Represents a request to disconnect a call.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_DisconnectPhoneCallType extends EWSType
{
    /**
     * Specifies the identifier of the call to disconnect.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_PhoneCallIdType
     */
    public $PhoneCallId;
}
