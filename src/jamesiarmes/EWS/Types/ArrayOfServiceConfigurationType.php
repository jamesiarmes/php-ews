<?php
/**
 * Contains ArrayOfServiceConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents service configurations.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfServiceConfigurationType extends EWSType
{
    /**
     * Specifies the requested service configurations by name.
     *
     * @since Exchange 2010
     *
     * @var ServiceConfigurationType
     */
    public $ConfigurationName;
}
