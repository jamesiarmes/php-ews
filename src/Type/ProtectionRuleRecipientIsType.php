<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ProtectionRuleRecipientIsType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Specifies that any recipient of the e-mail message matches any of the
 * specified recipients in the child Value (ProtectionRuleValueType) elements.
 *
 * @package php-ews\Type
 */
class ProtectionRuleRecipientIsType extends Type
{
    /**
     * Identifies a recipient.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
