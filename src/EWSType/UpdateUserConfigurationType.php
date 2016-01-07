<?php
/**
 * Contains EWSType_UpdateUserConfigurationType.
 */

/**
 * Represents a request to update a user configuration object.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_UpdateUserConfigurationType extends EWSType
{
    /**
     * Defines a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationType
     */
    public $UserConfiguration;
}
