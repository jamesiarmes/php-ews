<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAlternateIdsType
 *
 * A non-empty array of alternate Ids.
 * XSD Type: NonEmptyArrayOfAlternateIdsType
 *
 * @method NonEmptyArrayOfAlternateIdsType getAlternateId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternateId(array $alternateId)
 * @method NonEmptyArrayOfAlternateIdsType getAlternatePublicFolderId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderId(array $alternatePublicFolderId)
 * @method NonEmptyArrayOfAlternateIdsType getAlternatePublicFolderItemId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderItemId(array $alternatePublicFolderItemId)
 */
class NonEmptyArrayOfAlternateIdsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AlternateIdType[] $alternateId
     */
    protected $alternateId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AlternatePublicFolderIdType[]
     * $alternatePublicFolderId
     */
    protected $alternatePublicFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AlternatePublicFolderItemIdType[]
     * $alternatePublicFolderItemId
     */
    protected $alternatePublicFolderItemId = null;


}

