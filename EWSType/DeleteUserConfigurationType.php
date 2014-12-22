<?php
/**
 * Contains EWSType_DeleteUserConfigurationType.
 */

/**
 * Represents a request to delete a user configuration object.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_DeleteUserConfigurationType extends EWSType
{
    /**
     * Represents the name of the user configuration object to delete.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationNameType
     */
    public $UserConfigurationName;
}
