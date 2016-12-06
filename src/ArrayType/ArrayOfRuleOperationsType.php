<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleOperationsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of rule operations that can be performed on an Inbox.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleOperationsType extends ArrayType
{
    /**
     * Represents an operation to create a new Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\CreateRuleOperationType[]
     */
    public $CreateRuleOperation = array();

    /**
     * Represents an operation to delete an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\DeleteRuleOperationType[]
     */
    public $DeleteRuleOperation = array();

    /**
     * Represents an operation to update an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\SetRuleOperationType[]
     */
    public $SetRuleOperation = array();
}
