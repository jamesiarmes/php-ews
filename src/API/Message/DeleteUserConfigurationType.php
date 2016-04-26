<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method \jamesiarmes\PEWS\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method DeleteUserConfigurationType setUserConfigurationName(\jamesiarmes\PEWS\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;
}
