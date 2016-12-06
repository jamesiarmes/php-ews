<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetUserConfigurationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents a response that returns a user configuration object.
 *
 * @package php-ews\Response
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
