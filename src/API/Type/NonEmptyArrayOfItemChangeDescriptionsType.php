<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method array getAppendToItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method array getSetItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method array getDeleteItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\AppendToItemFieldType[]
     */
    protected $appendToItemField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SetItemFieldType[]
     */
    protected $setItemField = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeleteItemFieldType[]
     */
    protected $deleteItemField = null;
}
