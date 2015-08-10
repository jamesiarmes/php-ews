<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method GetServiceConfigurationType getActingAs()
 * @method GetServiceConfigurationType setActingAs($actingAs)
 * @method GetServiceConfigurationType getRequestedConfiguration()
 * @method GetServiceConfigurationType
 * setRequestedConfiguration($requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $actingAs
     */
    protected $actingAs = null;

    /**
     * @property array $requestedConfiguration
     */
    protected $requestedConfiguration = null;


}

