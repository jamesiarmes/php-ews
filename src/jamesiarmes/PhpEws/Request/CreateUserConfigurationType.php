<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\CreateUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to create a user configuration object.
 *
 * @package php-ews\Request
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
