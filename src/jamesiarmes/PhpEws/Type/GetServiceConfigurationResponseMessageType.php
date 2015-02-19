<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetServiceConfigurationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a response to a GetServiceConfiguration request.
 *
 * @package php-ews\Types
 */
class GetServiceConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of service configuration response messages.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfServiceConfigurationResponseMessageType
     */
    public $ResponseMessages;
}
