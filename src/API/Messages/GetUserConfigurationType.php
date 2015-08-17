<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method GetUserConfigurationType getUserConfigurationName()
 * @method GetUserConfigurationType setUserConfigurationName(\jamesiarmes\PEWS\API\TypeTest\UserConfigurationNameType $userConfigurationName)
 * @method GetUserConfigurationType getUserConfigurationProperties()
 * @method GetUserConfigurationType setUserConfigurationProperties(array $userConfigurationProperties)
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserConfigurationNameType
     * $userConfigurationName
     */
    protected $userConfigurationName = null;

    /**
     * @property string[] $userConfigurationProperties
     */
    protected $userConfigurationProperties = null;


}

