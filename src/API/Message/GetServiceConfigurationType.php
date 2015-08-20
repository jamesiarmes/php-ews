<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method GetServiceConfigurationType getActingAs()
 * @method GetServiceConfigurationType setActingAs(\jamesiarmes\PEWS\API\Type\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType getRequestedConfiguration()
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $actingAs
     */
    protected $actingAs = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ServiceConfigurationType[]
     * $requestedConfiguration
     */
    protected $requestedConfiguration = null;


}

