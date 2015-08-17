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
 * @method ProtectionRuleConditionType setAllInternal(string $allInternal)
 * @method ProtectionRuleConditionType getAnd()
 * @method ProtectionRuleConditionType setAnd(ProtectionRuleAndType $and)
 * @method ProtectionRuleConditionType getRecipientIs()
 * @method ProtectionRuleConditionType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleConditionType getSenderDepartments()
 * @method ProtectionRuleConditionType setSenderDepartments(array $senderDepartments)
 * @method ProtectionRuleConditionType getTrue()
 * @method ProtectionRuleConditionType setTrue(string $true)
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
     * @property string[] $recipientIs
     */
    protected $recipientIs = null;

    /**
     * @property string[] $senderDepartments
     */
    protected $senderDepartments = null;

    /**
     * @property string $true
     */
    protected $true = null;


}

