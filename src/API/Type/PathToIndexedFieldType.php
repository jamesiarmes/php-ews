<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PathToIndexedFieldType
 *
 *
 * XSD Type: PathToIndexedFieldType
 *
 * @method string getFieldURI()
 * @method PathToIndexedFieldType setFieldURI(string $fieldURI)
 * @method string getFieldIndex()
 * @method PathToIndexedFieldType setFieldIndex(string $fieldIndex)
 */
class PathToIndexedFieldType extends BasePathToElementType
{

    /**
     * @var string
     */
    protected $fieldURI = null;

    /**
     * @var string
     */
    protected $fieldIndex = null;
}
