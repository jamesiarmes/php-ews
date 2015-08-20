<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserConfigurationType
 *
 *
 * XSD Type: UserConfigurationType
 *
 * @method UserConfigurationNameType getUserConfigurationName()
 * @method UserConfigurationType setUserConfigurationName(UserConfigurationNameType $userConfigurationName)
 * @method ItemIdType getItemId()
 * @method UserConfigurationType setItemId(ItemIdType $itemId)
 * @method array getDictionary()
 * @method UserConfigurationType setDictionary(array $dictionary)
 * @method string getXmlData()
 * @method UserConfigurationType setXmlData(string $xmlData)
 * @method string getBinaryData()
 * @method UserConfigurationType setBinaryData(string $binaryData)
 */
class UserConfigurationType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationDictionaryEntryType[]
     */
    protected $dictionary = null;

    /**
     * @var string
     */
    protected $xmlData = null;

    /**
     * @var string
     */
    protected $binaryData = null;
}
