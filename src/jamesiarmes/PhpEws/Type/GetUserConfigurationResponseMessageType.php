<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserConfigurationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a response that returns a user configuration object.
 *
 * @package php-ews\Types
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationType
     */
    public $UserConfiguration;
}
