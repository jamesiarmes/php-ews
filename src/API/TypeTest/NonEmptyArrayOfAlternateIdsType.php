<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class NonEmptyArrayOfAlternateIdsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AlternateIdType[] $alternateId
     */
    protected $alternateId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AlternatePublicFolderIdType[]
     * $alternatePublicFolderId
     */
    protected $alternatePublicFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AlternatePublicFolderItemIdType[]
     * $alternatePublicFolderItemId
     */
    protected $alternatePublicFolderItemId = null;


}

