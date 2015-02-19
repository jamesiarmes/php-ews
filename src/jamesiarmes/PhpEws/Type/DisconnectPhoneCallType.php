<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DisconnectPhoneCallType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to disconnect a call.
 *
 * @package php-ews\Types
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
