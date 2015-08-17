<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ExtendedPropertyType
 *
 * Represents an extended property instance (both its path identifier along with its
 *  associated value).
 * XSD Type: ExtendedPropertyType
 *
 * @method ExtendedPropertyType getExtendedFieldURI()
 * @method ExtendedPropertyType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method ExtendedPropertyType getValue()
 * @method ExtendedPropertyType setValue(string $value)
 * @method ExtendedPropertyType getValues()
 * @method ExtendedPropertyType setValues(array $values)
 */
class ExtendedPropertyType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PathToExtendedFieldType
     * $extendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @property string $value
     */
    protected $value = null;

    /**
     * @property string[] $values
     */
    protected $values = null;


}

