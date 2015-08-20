<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method GetFolderType getFolderShape()
 * @method GetFolderType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method GetFolderType getFolderIds()
 * @method GetFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    protected $folderIds = null;


}

