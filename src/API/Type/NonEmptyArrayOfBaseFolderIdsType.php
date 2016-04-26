<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method NonEmptyArrayOfBaseFolderIdsType addFolderId(FolderIdType $folderId)
 * @method FolderIdType[] getFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType addDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method DistinguishedFolderIdType[] getDistinguishedFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setDistinguishedFolderId(array $distinguishedFolderId)
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType[]
     */
    protected $folderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType[]
     */
    protected $distinguishedFolderId = null;
}
