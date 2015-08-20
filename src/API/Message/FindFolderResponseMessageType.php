<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindFolderResponseMessageType
 *
 *
 * XSD Type: FindFolderResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\FindFolderParentType getRootFolder()
 * @method FindFolderResponseMessageType setRootFolder(\jamesiarmes\PEWS\API\Type\FindFolderParentType $rootFolder)
 */
class FindFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FindFolderParentType
     */
    protected $rootFolder = null;
}
