<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method GetFolderType getFolderShape()
 * @method GetFolderType setFolderShape(\jamesiarmes\PEWS\API\TypeTest\FolderResponseShapeType $folderShape)
 * @method GetFolderType getFolderIds()
 * @method GetFolderType setFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderResponseShapeType $folderShape
     */
    protected $folderShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $folderIds
     */
    protected $folderIds = null;


}

