<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PathToIndexedFieldType
 *
 *
 * XSD Type: PathToIndexedFieldType
 *
 * @method PathToIndexedFieldType getFieldURI()
 * @method PathToIndexedFieldType setFieldURI(string $fieldURI)
 * @method PathToIndexedFieldType getFieldIndex()
 * @method PathToIndexedFieldType setFieldIndex(string $fieldIndex)
 */
class PathToIndexedFieldType extends BasePathToElementType
{

    /**
     * @property string $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property string $fieldIndex
     */
    protected $fieldIndex = null;
}
