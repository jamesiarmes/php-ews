<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderChangeType getFolderId()
 * @method FolderChangeType setFolderId($folderId)
 * @method FolderChangeType getDistinguishedFolderId()
 * @method FolderChangeType setDistinguishedFolderId($distinguishedFolderId)
 * @method FolderChangeType getUpdates()
 * @method FolderChangeType setUpdates($updates)
 */
class FolderChangeType extends Type
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

