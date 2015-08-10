<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method GetFolderType getFolderShape()
 * @method GetFolderType setFolderShape($folderShape)
 * @method GetFolderType getFolderIds()
 * @method GetFolderType setFolderIds($folderIds)
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

