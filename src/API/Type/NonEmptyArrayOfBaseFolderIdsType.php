<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method array getFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method array getDistinguishedFolderId()
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
