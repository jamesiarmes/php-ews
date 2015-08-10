<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method GetUserConfigurationType getUserConfigurationName()
 * @method GetUserConfigurationType
 * setUserConfigurationName($userConfigurationName)
 * @method GetUserConfigurationType getUserConfigurationProperties()
 * @method GetUserConfigurationType
 * setUserConfigurationProperties($userConfigurationProperties)
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserConfigurationNameType
     * $userConfigurationName
     */
    protected $userConfigurationName = null;

    /**
     * @property array $userConfigurationProperties
     */
    protected $userConfigurationProperties = null;


}

