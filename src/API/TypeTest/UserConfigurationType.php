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
 * @method UserConfigurationType setUserConfigurationName($userConfigurationName)
 * @method UserConfigurationType getItemId()
 * @method UserConfigurationType setItemId($itemId)
 * @method UserConfigurationType getDictionary()
 * @method UserConfigurationType setDictionary($dictionary)
 * @method UserConfigurationType getXmlData()
 * @method UserConfigurationType setXmlData($xmlData)
 * @method UserConfigurationType getBinaryData()
 * @method UserConfigurationType setBinaryData($binaryData)
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
     * @property array $dictionary
     */
    protected $dictionary = null;

    /**
     * @property mixed $xmlData
     */
    protected $xmlData = null;

    /**
     * @property mixed $binaryData
     */
    protected $binaryData = null;


}

