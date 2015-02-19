<?php
/**
 * Contains EWSType_ArrayOfRulesType.
 */

/**
 * Represents an array of rules in the user's mailbox.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfRulesType extends EWSType
{
    /**
     * Contains a single rule and represents a rule in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleType
     */
    public $Rule;
}
