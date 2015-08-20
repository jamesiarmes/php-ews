<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class ProtectionRuleConditionType extends Type
{

    /**
     * @property string $allInternal
     */
    protected $allInternal = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ProtectionRuleAndType $and
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

