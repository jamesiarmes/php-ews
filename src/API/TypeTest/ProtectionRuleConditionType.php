<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ProtectionRuleConditionType
 *
 *
 * XSD Type: ProtectionRuleConditionType
 *
 * @method ProtectionRuleConditionType getAllInternal()
 * @method ProtectionRuleConditionType setAllInternal($allInternal)
 * @method ProtectionRuleConditionType getAnd()
 * @method ProtectionRuleConditionType setAnd($and)
 * @method ProtectionRuleConditionType getRecipientIs()
 * @method ProtectionRuleConditionType setRecipientIs($recipientIs)
 * @method ProtectionRuleConditionType getSenderDepartments()
 * @method ProtectionRuleConditionType setSenderDepartments($senderDepartments)
 * @method ProtectionRuleConditionType getTrue()
 * @method ProtectionRuleConditionType setTrue($true)
 */
class ProtectionRuleConditionType extends TypeTest
{

    /**
     * @property string $allInternal
     */
    protected $allInternal = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ProtectionRuleAndType $and
     */
    protected $and = null;

    /**
     * @property array $recipientIs
     */
    protected $recipientIs = null;

    /**
     * @property array $senderDepartments
     */
    protected $senderDepartments = null;

    /**
     * @property string $true
     */
    protected $true = null;


}

