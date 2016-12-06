<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DeleteUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to delete a user configuration object.
 *
 * @package php-ews\Request
 */
class DeleteUserConfigurationType extends BaseRequestType
{
    /**
     * Represents the name of the user configuration object to delete.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationNameType
     */
    public $UserConfigurationName;
}
