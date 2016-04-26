<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryObjectType getDictionaryKey()
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryObjectType getDictionaryValue()
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryKey = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryValue = null;
}
