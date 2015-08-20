<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method string getDeleteType()
 * @method DeleteFolderType setDeleteType(string $deleteType)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method DeleteFolderType setFolderIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
