<?php
/**
 * Contains EWSType_ProtectionRuleRecipientIsType.
 */

/**
 * Specifies that any recipient of the e-mail message matches any of the
 * specified recipients in the child Value (ProtectionRuleValueType) elements.
 *
 * @package php-ews\Types
 */
class EWSType_ProtectionRuleRecipientIsType extends EWSType
{
    /**
     * Identifies a recipient.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ProtectionRuleValueType
     */
    public $Value;
}
