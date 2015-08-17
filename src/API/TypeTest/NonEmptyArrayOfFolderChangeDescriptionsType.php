<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class NonEmptyArrayOfFolderChangeDescriptionsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AppendToFolderFieldType[]
     * $appendToFolderField
     */
    protected $appendToFolderField = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SetFolderFieldType[] $setFolderField
     */
    protected $setFolderField = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DeleteFolderFieldType[]
     * $deleteFolderField
     */
    protected $deleteFolderField = null;


}

