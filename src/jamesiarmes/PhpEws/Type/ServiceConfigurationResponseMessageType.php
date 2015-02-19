<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ServiceConfigurationResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents service configuration settings.
 *
 * @package php-ews\Types
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains service configuration information for the mail tips service.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\MailTipsServiceConfiguration
     */
    public $MailTipsConfiguration;

    /**
     * Contains service configuration information for the protection rules
     * service.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\ProtectionRulesServiceConfiguration
     */
    public $ProtectionRulesConfiguration;

    /**
     * Contains service configuration information for the Unified Messaging
     * service.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\UnifiedMessageServiceConfiguration
     */
    public $UnifiedMessagingConfiguration;
}
