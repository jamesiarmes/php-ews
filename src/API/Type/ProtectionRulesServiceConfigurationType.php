<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRulesServiceConfigurationType
 *
 *
 * XSD Type: ProtectionRulesServiceConfiguration
 *
 * @method integer getRefreshInterval()
 * @method ProtectionRulesServiceConfigurationType setRefreshInterval(integer $refreshInterval)
 * @method ProtectionRulesServiceConfigurationType addRules(ProtectionRuleType $rules)
 * @method ProtectionRuleType[] getRules()
 * @method ProtectionRulesServiceConfigurationType setRules(array $rules)
 * @method ProtectionRulesServiceConfigurationType addInternalDomains(SmtpDomainType $internalDomains)
 * @method SmtpDomainType[] getInternalDomains()
 * @method ProtectionRulesServiceConfigurationType setInternalDomains(array $internalDomains)
 */
class ProtectionRulesServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @var integer
     */
    protected $refreshInterval = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRuleType[]
     */
    protected $rules = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SmtpDomainType[]
     */
    protected $internalDomains = null;
}
