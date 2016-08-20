<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ProtectionRuleAndType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Specifies that all child elements must match to evaluate to true.
 *
 * @package php-ews\Type
 */
class ProtectionRuleAndType extends Type
{
    /**
     * Evaluates to true if all recipients of an e-mail message are internal to
     * the sender's organization.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $AllInternal;

    /**
     * Specifies that all child elements must match to evaluate to true.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRuleAndType
     */
    public $And;

    /**
     * Specifies that any recipient of the e-mail message matches any of the
     * specified recipients in the child Value (ProtectionRuleValueType)
     * elements.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRuleRecipientIsType
     */
    public $RecipientIs;

    /**
     * Specifies that the department of the sender matches any of the specified
     * departments in the child Value (ProtectionRuleValueType) elements.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRuleSenderDepartmentsType
     */
    public $SenderDepartments;

    /**
     * Specifies a condition that always matches.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $True;
}
