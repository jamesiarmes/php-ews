<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ChangeDescriptionType
 *
 *
 * XSD Type: ChangeDescriptionType
 *
 * @method ChangeDescriptionType getFieldURI()
 * @method ChangeDescriptionType setFieldURI(array $fieldURI)
 * @method ChangeDescriptionType getIndexedFieldURI()
 * @method ChangeDescriptionType setIndexedFieldURI(array $indexedFieldURI)
 * @method ChangeDescriptionType getExtendedFieldURI()
 * @method ChangeDescriptionType setExtendedFieldURI(array $extendedFieldURI)
 */
class ChangeDescriptionType extends Type
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

