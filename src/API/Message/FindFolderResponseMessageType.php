<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindFolderResponseMessageType
 *
 *
 * XSD Type: FindFolderResponseMessageType
 *
 * @method FindFolderResponseMessageType getRootFolder()
 * @method FindFolderResponseMessageType setRootFolder(\jamesiarmes\PEWS\API\Type\FindFolderParentType $rootFolder)
 */
class FindFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FindFolderParentType $rootFolder
     */
    protected $rootFolder = null;
}
