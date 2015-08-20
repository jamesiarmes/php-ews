<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method DisconnectPhoneCallType getPhoneCallId()
 * @method DisconnectPhoneCallType setPhoneCallId(\jamesiarmes\PEWS\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\PhoneCallIdType $phoneCallId
     */
    protected $phoneCallId = null;
}
