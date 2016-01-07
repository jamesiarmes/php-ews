<?php
/**
 * Contains EWSType_CreateUserConfigurationType.
 */

/**
 * Represents a request to create a user configuration object.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_CreateUserConfigurationType extends EWSType
{
    /**
     * Represents a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationType
     */
    public $UserConfiguration;
}
