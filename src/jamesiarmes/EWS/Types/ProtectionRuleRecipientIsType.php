<?php
/**
 * Contains ProtectionRuleRecipientIsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies that any recipient of the e-mail message matches any of the
 * specified recipients in the child Value (ProtectionRuleValueType) elements.
 *
 * @package jamesiarmes\EWS\Types
 */
class ProtectionRuleRecipientIsType extends EWSType
{
    /**
     * Identifies a recipient.
     *
     * @since Exchange 2007
     *
     * @var ProtectionRuleValueType
     */
    public $Value;
}
