<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetPhoneCallInformationResponseMessageType
 *
 *
 * XSD Type: GetPhoneCallInformationResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\PhoneCallInformationType getPhoneCallInformation()
 * @method GetPhoneCallInformationResponseMessageType setPhoneCallInformation(\jamesiarmes\PEWS\API\Type\PhoneCallInformationType $phoneCallInformation)
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhoneCallInformationType
     */
    protected $phoneCallInformation = null;
}
