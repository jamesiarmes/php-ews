<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method \jamesiarmes\PEWS\API\Type\PhoneCallIdType getPhoneCallId()
 * @method DisconnectPhoneCallType setPhoneCallId(\jamesiarmes\PEWS\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
