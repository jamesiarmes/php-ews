<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method DeleteFolderType getDeleteType()
 * @method DeleteFolderType setDeleteType($deleteType)
 * @method DeleteFolderType getFolderIds()
 * @method DeleteFolderType setFolderIds($folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @property string $deleteType
     */
    protected $deleteType = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $folderIds
     */
    protected $folderIds = null;


}

