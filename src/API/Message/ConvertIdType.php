<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ConvertIdType
 *
 * Converts the passed source ids into the destination format. Change keys are not
 *  returned.
 * XSD Type: ConvertIdType
 *
 * @method string getDestinationFormat()
 * @method ConvertIdType setDestinationFormat(string $destinationFormat)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAlternateIdsType getSourceIds()
 * @method ConvertIdType setSourceIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAlternateIdsType $sourceIds)
 */
class ConvertIdType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $destinationFormat = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAlternateIdsType
     */
    protected $sourceIds = null;
}
