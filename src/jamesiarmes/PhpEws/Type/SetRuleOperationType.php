<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SetRuleOperationType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an operation to update an existing rule.
 *
 * @package php-ews\Type
 */
class SetRuleOperationType extends RuleOperationType
{
    /**
     * Represents a rule in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleType
     */
    public $Rule;
}
