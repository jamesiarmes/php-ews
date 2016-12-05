<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRulesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of rules in the user's mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfRulesType extends ArrayType
{
    /**
     * Contains a single rule and represents a rule in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\RuleType[]
     */
    public $Rule = array();
}
