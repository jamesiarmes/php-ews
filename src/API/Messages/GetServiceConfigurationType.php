<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method GetServiceConfigurationType getActingAs()
 * @method GetServiceConfigurationType setActingAs(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType getRequestedConfiguration()
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $actingAs
     */
    protected $actingAs = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ServiceConfigurationType[]
     * $requestedConfiguration
     */
    protected $requestedConfiguration = null;


}

