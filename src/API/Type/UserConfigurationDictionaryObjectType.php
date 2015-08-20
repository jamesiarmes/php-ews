<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserConfigurationDictionaryObjectType
 *
 *
 * XSD Type: UserConfigurationDictionaryObjectType
 *
 * @method string getType()
 * @method UserConfigurationDictionaryObjectType setType(string $type)
 * @method UserConfigurationDictionaryObjectType addValue(string $value)
 * @method string[] getValue()
 * @method UserConfigurationDictionaryObjectType setValue(array $value)
 */
class UserConfigurationDictionaryObjectType extends Type
{

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string[]
     */
    protected $value = null;
}
