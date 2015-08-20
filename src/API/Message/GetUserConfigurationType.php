<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method \jamesiarmes\PEWS\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method GetUserConfigurationType setUserConfigurationName(\jamesiarmes\PEWS\API\Type\UserConfigurationNameType $userConfigurationName)
 * @method array getUserConfigurationProperties()
 * @method GetUserConfigurationType setUserConfigurationProperties(array $userConfigurationProperties)
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var string[]
     */
    protected $userConfigurationProperties = null;
}
