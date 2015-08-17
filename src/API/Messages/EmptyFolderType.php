<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing EmptyFolderType
 *
 *
 * XSD Type: EmptyFolderType
 *
 * @method EmptyFolderType getDeleteType()
 * @method EmptyFolderType setDeleteType(string $deleteType)
 * @method EmptyFolderType getDeleteSubFolders()
 * @method EmptyFolderType setDeleteSubFolders(boolean $deleteSubFolders)
 * @method EmptyFolderType getFolderIds()
 * @method EmptyFolderType setFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $folderIds)
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

