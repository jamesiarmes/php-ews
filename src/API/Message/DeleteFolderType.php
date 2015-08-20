<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method DeleteFolderType getDeleteType()
 * @method DeleteFolderType setDeleteType(string $deleteType)
 * @method DeleteFolderType getFolderIds()
 * @method DeleteFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @property string $deleteType
     */
    protected $deleteType = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    protected $folderIds = null;


}

