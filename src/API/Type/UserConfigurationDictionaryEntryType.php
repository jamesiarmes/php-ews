<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryEntryType getDictionaryKey()
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryEntryType getDictionaryValue()
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryObjectType
     * $dictionaryKey
     */
    protected $dictionaryKey = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryObjectType
     * $dictionaryValue
     */
    protected $dictionaryValue = null;


}

