<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method DeleteUserConfigurationType getUserConfigurationName()
 * @method DeleteUserConfigurationType setUserConfigurationName(\jamesiarmes\PEWS\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationNameType
     * $userConfigurationName
     */
    protected $userConfigurationName = null;
}
