<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfFolderChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfFolderChangeDescriptionsType
 *
 * @method array getAppendToFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setAppendToFolderField(array $appendToFolderField)
 * @method array getSetFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setSetFolderField(array $setFolderField)
 * @method array getDeleteFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setDeleteFolderField(array $deleteFolderField)
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AppendToFolderFieldType[]
     */
    protected $appendToFolderField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SetFolderFieldType[]
     */
    protected $setFolderField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeleteFolderFieldType[]
     */
    protected $deleteFolderField = null;
}
