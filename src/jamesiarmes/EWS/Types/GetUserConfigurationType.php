<?php
/**
 * Contains GetUserConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to get a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class GetUserConfigurationType extends EWSType
{
    /**
     * Represents the name of a user configuration object.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Specifies the user configuration property types to return.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationPropertyType
     */
    public $UserConfigurationProperties;
}
