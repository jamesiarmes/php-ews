<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class NonEmptyArrayOfBaseFolderIdsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType[] $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DistinguishedFolderIdType[]
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;


}

