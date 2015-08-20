<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class FolderChangeType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType
     * $distinguishedFolderId
     */
    protected $distinguishedFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFolderChangeDescriptionsType
     * $updates
     */
    protected $updates = null;
}
