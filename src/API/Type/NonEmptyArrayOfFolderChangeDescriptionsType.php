<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfFolderChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfFolderChangeDescriptionsType
 *
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getAppendToFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setAppendToFolderField(array $appendToFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getSetFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setSetFolderField(array $setFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getDeleteFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setDeleteFolderField(array $deleteFolderField)
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\AppendToFolderFieldType[]
     * $appendToFolderField
     */
    protected $appendToFolderField = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SetFolderFieldType[] $setFolderField
     */
    protected $setFolderField = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeleteFolderFieldType[] $deleteFolderField
     */
    protected $deleteFolderField = null;
}
