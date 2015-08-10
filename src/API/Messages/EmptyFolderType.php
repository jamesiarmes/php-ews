<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing EmptyFolderType
 *
 *
 * XSD Type: EmptyFolderType
 *
 * @method EmptyFolderType getDeleteType()
 * @method EmptyFolderType setDeleteType($deleteType)
 * @method EmptyFolderType getDeleteSubFolders()
 * @method EmptyFolderType setDeleteSubFolders($deleteSubFolders)
 * @method EmptyFolderType getFolderIds()
 * @method EmptyFolderType setFolderIds($folderIds)
 */
class EmptyFolderType extends BaseRequestType
{

    /**
     * @property string $deleteType
     */
    protected $deleteType = null;

    /**
     * @property boolean $deleteSubFolders
     */
    protected $deleteSubFolders = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $folderIds
     */
    protected $folderIds = null;


}

