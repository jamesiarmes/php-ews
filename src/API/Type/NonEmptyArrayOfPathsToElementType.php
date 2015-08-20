<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfPathsToElementType
 *
 *
 * XSD Type: NonEmptyArrayOfPathsToElementType
 *
 * @method NonEmptyArrayOfPathsToElementType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setFieldURI(array $fieldURI)
 * @method NonEmptyArrayOfPathsToElementType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setIndexedFieldURI(array $indexedFieldURI)
 * @method NonEmptyArrayOfPathsToElementType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setExtendedFieldURI(array $extendedFieldURI)
 */
class NonEmptyArrayOfPathsToElementType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;
}
