<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ConvertIdResponseMessageType
 *
 * Response Message for a single id conversion in the ConvertId web method. Note
 *  that the AlternateId element will be missing in the case of an error.
 * XSD Type: ConvertIdResponseMessageType
 *
 * @method ConvertIdResponseMessageType getAlternateId()
 * @method ConvertIdResponseMessageType setAlternateId($alternateId)
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AlternateIdBaseType $alternateId
     */
    protected $alternateId = null;


}

