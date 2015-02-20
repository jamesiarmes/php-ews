<?php
/**
 * Contains DeleteUserConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to delete a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class DeleteUserConfigurationType extends EWSType
{
    /**
     * Represents the name of the user configuration object to delete.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationNameType
     */
    public $UserConfigurationName;
}
