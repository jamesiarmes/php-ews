<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetPhoneCallInformationType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to get telephone call information.
 *
 * @package php-ews\Request
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
