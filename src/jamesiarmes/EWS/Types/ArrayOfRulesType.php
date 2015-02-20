<?php
/**
 * Contains ArrayOfRulesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of rules in the user's mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRulesType extends EWSType
{
    /**
     * Contains a single rule and represents a rule in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var RuleType
     */
    public $Rule;
}
