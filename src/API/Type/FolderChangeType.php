<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderIdType getFolderId()
 * @method FolderChangeType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method FolderChangeType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getUpdates()
 * @method FolderChangeType setUpdates(NonEmptyArrayOfFolderChangeDescriptionsType $updates)
 */
class FolderChangeType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfFolderChangeDescriptionsType
     */
    protected $updates = null;
}
