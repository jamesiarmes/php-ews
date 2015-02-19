<?php
/**
 * Contains EWSType_ArrayOfServiceConfigurationType.
 */

/**
 * Represents service configurations.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfServiceConfigurationType extends EWSType
{
    /**
     * Specifies the requested service configurations by name.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Enumeration\ServiceConfigurationType
     */
    public $ConfigurationName;
}
