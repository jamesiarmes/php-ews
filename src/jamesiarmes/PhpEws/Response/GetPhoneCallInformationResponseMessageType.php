<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetPhoneCallInformationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to a single GetPhoneCallInformation request.
 *
 * @package php-ews\Response
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
