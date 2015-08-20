<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfPathsToElementType
 *
 *
 * XSD Type: NonEmptyArrayOfPathsToElementType
 *
 * @method NonEmptyArrayOfPathsToElementType getFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setFieldURI(array $fieldURI)
 * @method NonEmptyArrayOfPathsToElementType getIndexedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setIndexedFieldURI(array $indexedFieldURI)
 * @method NonEmptyArrayOfPathsToElementType getExtendedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setExtendedFieldURI(array $extendedFieldURI)
 */
class NonEmptyArrayOfPathsToElementType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;
}
