<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserConfigurationType
 *
 *
 * XSD Type: UserConfigurationType
 *
 * @method UserConfigurationType getUserConfigurationName()
 * @method UserConfigurationType setUserConfigurationName(UserConfigurationNameType $userConfigurationName)
 * @method UserConfigurationType getItemId()
 * @method UserConfigurationType setItemId(ItemIdType $itemId)
 * @method UserConfigurationType getDictionary()
 * @method UserConfigurationType setDictionary(array $dictionary)
 * @method UserConfigurationType getXmlData()
 * @method UserConfigurationType setXmlData(string $xmlData)
 * @method UserConfigurationType getBinaryData()
 * @method UserConfigurationType setBinaryData(string $binaryData)
 */
class UserConfigurationType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationNameType
     * $userConfigurationName
     */
    protected $userConfigurationName = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryEntryType[]
     * $dictionary
     */
    protected $dictionary = null;

    /**
     * @property string $xmlData
     */
    protected $xmlData = null;

    /**
     * @property string $binaryData
     */
    protected $binaryData = null;


}

