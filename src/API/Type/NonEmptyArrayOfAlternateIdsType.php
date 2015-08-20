<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfAlternateIdsType
 *
 * A non-empty array of alternate Ids.
 * XSD Type: NonEmptyArrayOfAlternateIdsType
 *
 * @method array getAlternateId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternateId(array $alternateId)
 * @method array getAlternatePublicFolderId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderId(array $alternatePublicFolderId)
 * @method array getAlternatePublicFolderItemId()
 * @method NonEmptyArrayOfAlternateIdsType setAlternatePublicFolderItemId(array $alternatePublicFolderItemId)
 */
class NonEmptyArrayOfAlternateIdsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AlternateIdType[]
     */
    protected $alternateId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AlternatePublicFolderIdType[]
     */
    protected $alternatePublicFolderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AlternatePublicFolderItemIdType[]
     */
    protected $alternatePublicFolderItemId = null;
}
