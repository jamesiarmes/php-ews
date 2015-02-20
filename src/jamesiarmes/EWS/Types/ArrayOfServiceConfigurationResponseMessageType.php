<?php
/**
 * Contains ArrayOfServiceConfigurationResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of service configuration response messages.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfServiceConfigurationResponseMessageType extends EWSType
{
    /**
     * Contains service configuration settings.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var ServiceConfigurationResponseMessageType
     */
    public $ServiceConfigurationResponseMessageType;
}
