<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetPhoneCallInformationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a response to a single GetPhoneCallInformation request.
 *
 * @package php-ews\Types
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the state information for a phone call.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneCallInformationType
     */
    public $PhoneCallInformation;
}
