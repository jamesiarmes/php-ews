<?php
/**
 * Contains EWSType_ArrayOfServiceConfigurationResponseMessageType.
 */

/**
 * Represents an array of service configuration response messages.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfServiceConfigurationResponseMessageType extends EWSType
{
    /**
     * Contains service configuration settings.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ServiceConfigurationResponseMessageType
     */
    public $ServiceConfigurationResponseMessageType;
}
