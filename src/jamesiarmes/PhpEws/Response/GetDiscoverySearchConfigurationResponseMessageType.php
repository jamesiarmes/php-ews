<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetDiscoverySearchConfigurationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetDiscoverySearchConfiguration request.
 *
 * @package php-ews\Response
 */
class GetDiscoverySearchConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies an array of discovery search configurations.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfDiscoverySearchConfigurationType
     */
    public $DiscoverySearchConfigurations;
}
