<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRulesServiceConfigurationType
 *
 *
 * XSD Type: ProtectionRulesServiceConfiguration
 *
 * @method ProtectionRulesServiceConfigurationType getRefreshInterval()
 * @method ProtectionRulesServiceConfigurationType setRefreshInterval(integer $refreshInterval)
 * @method ProtectionRulesServiceConfigurationType getRules()
 * @method ProtectionRulesServiceConfigurationType setRules(array $rules)
 * @method ProtectionRulesServiceConfigurationType getInternalDomains()
 * @method ProtectionRulesServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class ProtectionRulesServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @property integer $refreshInterval
     */
    protected $refreshInterval = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ProtectionRuleType[] $rules
     */
    protected $rules = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SmtpDomainType[] $internalDomains
     */
    protected $internalDomains = null;
}
