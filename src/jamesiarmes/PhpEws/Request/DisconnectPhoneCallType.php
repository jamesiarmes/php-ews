<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DisconnectPhoneCallType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to disconnect a call.
 *
 * @package php-ews\Request
 */
class DisconnectPhoneCallType extends BaseRequestType
{
    /**
     * Specifies the identifier of the call to disconnect.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
