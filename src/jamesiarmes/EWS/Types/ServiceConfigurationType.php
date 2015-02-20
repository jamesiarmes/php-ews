<?php
/**
 * Contains ServiceConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies the requested service configurations by name.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ServiceConfigurationType extends EWSType
{
    /**
     * Identifies the MailTips service configuration.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MAIL_TIPS = 'MailTips';

    /**
     * Identifies the Protection Rules service configuration.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PROTECTION_RULES = 'ProtectionRules';

    /**
     * Identifies the Unified Messaging service configuration.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNIFIED_MESSAGING_CONFIG = 'UnifiedMessagingConfiguration';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
