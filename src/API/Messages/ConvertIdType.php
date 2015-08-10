<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ConvertIdType
 *
 * Converts the passed source ids into the destination format. Change keys are not
 *  returned.
 * XSD Type: ConvertIdType
 *
 * @method ConvertIdType getDestinationFormat()
 * @method ConvertIdType setDestinationFormat($destinationFormat)
 * @method ConvertIdType getSourceIds()
 * @method ConvertIdType setSourceIds($sourceIds)
 */
class ConvertIdType extends BaseRequestType
{

    /**
     * @property string $destinationFormat
     */
    protected $destinationFormat = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAlternateIdsType
     * $sourceIds
     */
    protected $sourceIds = null;


}

