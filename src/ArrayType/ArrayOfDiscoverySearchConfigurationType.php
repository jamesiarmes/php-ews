<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfDiscoverySearchConfigurationType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of DiscoverySearchConfiguration elements.
 *
 * @package php-ews\Array
 */
class ArrayOfDiscoverySearchConfigurationType extends ArrayType
{
    /**
     * Specifies the configuration for eDiscovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\DiscoverySearchConfigurationType[]
     */
    public $DiscoverySearchConfiguration = array();
}
