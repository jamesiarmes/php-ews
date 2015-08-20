<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\FindItemParentType getRootFolder()
 * @method FindItemResponseMessageType setRootFolder(\jamesiarmes\PEWS\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FindItemParentType
     */
    protected $rootFolder = null;
}
