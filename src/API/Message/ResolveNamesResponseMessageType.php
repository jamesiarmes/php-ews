<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 *
 * @method ResolveNamesResponseMessageType getResolutionSet()
 * @method ResolveNamesResponseMessageType setResolutionSet(\jamesiarmes\PEWS\API\Type\ArrayOfResolutionType $resolutionSet)
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfResolutionType $resolutionSet
     */
    protected $resolutionSet = null;
}
