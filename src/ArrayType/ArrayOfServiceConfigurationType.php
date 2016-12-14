<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfServiceConfigurationType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents service configurations.
 *
 * @package php-ews\Array
 */
class ArrayOfServiceConfigurationType extends ArrayType
{
    /**
     * Specifies the requested service configurations by name.
     *
     * @since Exchange 2010
     *
     * @var string[]
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ServiceConfigurationType[]
     */
    public $ConfigurationName = array();
}
