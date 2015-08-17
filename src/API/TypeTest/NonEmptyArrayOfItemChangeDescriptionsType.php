<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method NonEmptyArrayOfItemChangeDescriptionsType getAppendToItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getSetItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getDeleteItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\AppendToItemFieldType[]
     * $appendToItemField
     */
    protected $appendToItemField = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SetItemFieldType[] $setItemField
     */
    protected $setItemField = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DeleteItemFieldType[] $deleteItemField
     */
    protected $deleteItemField = null;


}

