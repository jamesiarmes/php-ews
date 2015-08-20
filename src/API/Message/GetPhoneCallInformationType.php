<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetPhoneCallInformationType
 *
 *
 * XSD Type: GetPhoneCallInformationType
 *
 * @method \jamesiarmes\PEWS\API\Type\PhoneCallIdType getPhoneCallId()
 * @method GetPhoneCallInformationType setPhoneCallId(\jamesiarmes\PEWS\API\Type\PhoneCallIdType $phoneCallId)
 */
class GetPhoneCallInformationType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
