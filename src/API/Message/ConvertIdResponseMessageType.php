<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ConvertIdResponseMessageType
 *
 * Response Message for a single id conversion in the ConvertId web method. Note
 *  that the AlternateId element will be missing in the case of an error.
 * XSD Type: ConvertIdResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\AlternateIdBaseType getAlternateId()
 * @method ConvertIdResponseMessageType setAlternateId(\jamesiarmes\PEWS\API\Type\AlternateIdBaseType $alternateId)
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AlternateIdBaseType
     */
    protected $alternateId = null;
}
