<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\CreateUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to create a user configuration object.
 *
 * @package php-ews\Types
 */
class CreateUserConfigurationType extends BaseRequestType
{
    /**
     * Represents a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationType
     */
    public $UserConfiguration;
}
