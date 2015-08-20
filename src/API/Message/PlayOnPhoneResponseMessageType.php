<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing PlayOnPhoneResponseMessageType
 *
 *
 * XSD Type: PlayOnPhoneResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\PhoneCallIdType getPhoneCallId()
 * @method PlayOnPhoneResponseMessageType setPhoneCallId(\jamesiarmes\PEWS\API\Type\PhoneCallIdType $phoneCallId)
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
