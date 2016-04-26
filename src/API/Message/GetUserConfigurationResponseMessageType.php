<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\UserConfigurationType getUserConfiguration()
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\jamesiarmes\PEWS\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;
}
