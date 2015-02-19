<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserConfigurationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a request to get a user configuration object.
 *
 * @package php-ews\Types
 */
class GetUserConfigurationType extends BaseRequestType
{
    /**
     * Represents the name of a user configuration object.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UserConfigurationNameType
     */
    public $UserConfigurationName;

    /**
     * Specifies the user configuration property types to return.
     *
     * This element must be present in a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Enumeration\UserConfigurationPropertyType
     */
    public $UserConfigurationProperties;
}
