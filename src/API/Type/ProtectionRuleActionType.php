<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRuleActionType
 *
 *
 * XSD Type: ProtectionRuleActionType
 *
 * @method string getName()
 * @method ProtectionRuleActionType setName(string $name)
 * @method ProtectionRuleActionType addArgument(ProtectionRuleArgumentType $argument)
 * @method ProtectionRuleArgumentType[] getArgument()
 * @method ProtectionRuleActionType setArgument(array $argument)
 */
class ProtectionRuleActionType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRuleArgumentType[]
     */
    protected $argument = null;
}
