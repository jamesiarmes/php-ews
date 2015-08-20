<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method FindItemResponseMessageType getRootFolder()
 * @method FindItemResponseMessageType setRootFolder(\jamesiarmes\PEWS\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FindItemParentType $rootFolder
     */
    protected $rootFolder = null;
}
