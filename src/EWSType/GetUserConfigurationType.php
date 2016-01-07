<?php
/**
 * Contains EWSType_GetUserConfigurationType.
 */

/**
 * Represents a request to get a user configuration object.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetUserConfigurationType extends EWSType
{
    /**
     * Represents the name of a user configuration object.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Specifies the user configuration property types to return.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationPropertyType
     */
    public $UserConfigurationProperties;
}
