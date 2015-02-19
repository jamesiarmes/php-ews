<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetPhoneCallInformationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to get telephone call information.
 *
 * @package php-ews\Types
 */
class GetPhoneCallInformationType extends BaseRequestType
{
    /**
     * Specifies the identifier of a phone call.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
