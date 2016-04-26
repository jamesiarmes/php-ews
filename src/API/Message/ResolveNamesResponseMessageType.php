<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfResolutionType getResolutionSet()
 * @method ResolveNamesResponseMessageType setResolutionSet(\jamesiarmes\PEWS\API\Type\ArrayOfResolutionType $resolutionSet)
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfResolutionType
     */
    protected $resolutionSet = null;
}
