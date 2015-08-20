<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRuleActionType
 *
 *
 * XSD Type: ProtectionRuleActionType
 *
 * @method ProtectionRuleActionType getName()
 * @method ProtectionRuleActionType setName(string $name)
 * @method ProtectionRuleActionType getArgument()
 * @method ProtectionRuleActionType setArgument(array $argument)
 */
class ProtectionRuleActionType extends Type
{

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ProtectionRuleArgumentType[] $argument
     */
    protected $argument = null;
}
