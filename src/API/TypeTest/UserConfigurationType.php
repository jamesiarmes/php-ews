<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class UserConfigurationType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserConfigurationNameType
     * $userConfigurationName
     */
    protected $userConfigurationName = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserConfigurationDictionaryEntryType[]
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

