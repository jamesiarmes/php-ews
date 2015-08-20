<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing NonEmptyArrayOfPathsToElementType
 *
 *
 * XSD Type: NonEmptyArrayOfPathsToElementType
 *
 * @method array getFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
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
