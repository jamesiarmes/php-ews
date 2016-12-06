<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\UpdateUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to update a user configuration object.
 *
 * @package php-ews\Request
 */
class UpdateUserConfigurationType extends BaseRequestType
{
    /**
     * Defines a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationType
     */
    public $UserConfiguration;
}
