<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ProtectionRulesServiceConfigurationType
 *
 *
 * XSD Type: ProtectionRulesServiceConfiguration
 *
 * @method ProtectionRulesServiceConfigurationType getRefreshInterval()
 * @method ProtectionRulesServiceConfigurationType
 * setRefreshInterval($refreshInterval)
 * @method ProtectionRulesServiceConfigurationType getRules()
 * @method ProtectionRulesServiceConfigurationType setRules($rules)
 * @method ProtectionRulesServiceConfigurationType getInternalDomains()
 * @method ProtectionRulesServiceConfigurationType
 * setInternalDomains($internalDomains)
 */
class ProtectionRulesServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @property integer $refreshInterval
     */
    protected $refreshInterval = null;

    /**
     * @property array $rules
     */
    protected $rules = null;

    /**
     * @property array $internalDomains
     */
    protected $internalDomains = null;


}

