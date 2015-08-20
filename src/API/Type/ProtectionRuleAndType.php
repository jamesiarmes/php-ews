<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRuleAndType
 *
 *
 * XSD Type: ProtectionRuleAndType
 *
 * @method array getAllInternal()
 * @method ProtectionRuleAndType setAllInternal(array $allInternal)
 * @method array getAnd()
 * @method ProtectionRuleAndType setAnd(array $and)
 * @method array getRecipientIs()
 * @method ProtectionRuleAndType setRecipientIs(array $recipientIs)
 * @method array getSenderDepartments()
 * @method ProtectionRuleAndType setSenderDepartments(array $senderDepartments)
 * @method array getTrue()
 * @method ProtectionRuleAndType setTrue(array $true)
 */
class ProtectionRuleAndType extends Type
{

    /**
     * @var string[]
     */
    protected $allInternal = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRuleAndType[]
     */
    protected $and = null;

    /**
     * @var string[]
     */
    protected $recipientIs = null;

    /**
     * @var string[]
     */
    protected $senderDepartments = null;

    /**
     * @var string[]
     */
    protected $true = null;
}
