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
 * @method array getRules()
 * @method ProtectionRulesServiceConfigurationType setRules(array $rules)
 * @method array getInternalDomains()
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
