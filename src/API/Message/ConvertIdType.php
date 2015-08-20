<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ConvertIdType
 *
 * Converts the passed source ids into the destination format. Change keys are not
 *  returned.
 * XSD Type: ConvertIdType
 *
 * @method ConvertIdType getDestinationFormat()
 * @method ConvertIdType setDestinationFormat(string $destinationFormat)
 * @method ConvertIdType getSourceIds()
 * @method ConvertIdType setSourceIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAlternateIdsType $sourceIds)
 */
class ConvertIdType extends BaseRequestType
{

    /**
     * @property string $destinationFormat
     */
    protected $destinationFormat = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAlternateIdsType $sourceIds
     */
    protected $sourceIds = null;
}
