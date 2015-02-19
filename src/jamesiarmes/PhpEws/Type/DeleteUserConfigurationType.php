<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DeleteUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to delete a user configuration object.
 *
 * @package php-ews\Types
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
