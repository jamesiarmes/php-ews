<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ChangeDescriptionType
 *
 *
 * XSD Type: ChangeDescriptionType
 *
 * @method ChangeDescriptionType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ChangeDescriptionType setFieldURI(array $fieldURI)
 * @method ChangeDescriptionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ChangeDescriptionType setIndexedFieldURI(array $indexedFieldURI)
 * @method ChangeDescriptionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ChangeDescriptionType setExtendedFieldURI(array $extendedFieldURI)
 */
class ChangeDescriptionType extends Type
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
