<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UpdateUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to update a user configuration object.
 *
 * @package php-ews\Types
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
