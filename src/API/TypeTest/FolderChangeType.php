<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderChangeType getFolderId()
 * @method FolderChangeType setFolderId(FolderIdType $folderId)
 * @method FolderChangeType getDistinguishedFolderId()
 * @method FolderChangeType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method FolderChangeType getUpdates()
 * @method FolderChangeType setUpdates(NonEmptyArrayOfFolderChangeDescriptionsType $updates)
 */
class FolderChangeType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DistinguishedFolderIdType
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;

    /**
     * @property
     * \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfFolderChangeDescriptionsType
     * $updates
     */
    protected $updates = null;


}

