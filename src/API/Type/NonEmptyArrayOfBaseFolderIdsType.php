<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method NonEmptyArrayOfBaseFolderIdsType getFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType getDistinguishedFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setDistinguishedFolderId(array $distinguishedFolderId)
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType[] $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType[]
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;


}

