<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method \jamesiarmes\PEWS\API\Type\FolderResponseShapeType getFolderShape()
 * @method GetFolderType setFolderShape(\jamesiarmes\PEWS\API\Type\FolderResponseShapeType $folderShape)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method GetFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
