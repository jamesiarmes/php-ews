<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method GetUserConfigurationResponseMessageType getUserConfiguration()
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\jamesiarmes\PEWS\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserConfigurationType $userConfiguration
     */
    protected $userConfiguration = null;
}
