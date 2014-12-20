<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\ServiceConfigurationType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Specifies the requested service configurations by name.
 *
 * @package php-ews\Enumeration
 */
class ServiceConfigurationType extends Enumeration
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
}
