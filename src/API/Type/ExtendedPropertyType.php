<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ExtendedPropertyType
 *
 * Represents an extended property instance (both its path identifier along with its
 *  associated value).
 * XSD Type: ExtendedPropertyType
 *
 * @method PathToExtendedFieldType getExtendedFieldURI()
 * @method ExtendedPropertyType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method string getValue()
 * @method ExtendedPropertyType setValue(string $value)
 * @method array getValues()
 * @method ExtendedPropertyType setValues(array $values)
 */
class ExtendedPropertyType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\PathToExtendedFieldType
     */
    protected $extendedFieldURI = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @var string[]
     */
    protected $values = null;
}
