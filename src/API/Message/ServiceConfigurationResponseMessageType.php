<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method ServiceConfigurationResponseMessageType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\jamesiarmes\PEWS\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method ServiceConfigurationResponseMessageType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\jamesiarmes\PEWS\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method ServiceConfigurationResponseMessageType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\jamesiarmes\PEWS\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\MailTipsServiceConfigurationType
     * $mailTipsConfiguration
     */
    protected $mailTipsConfiguration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\UnifiedMessageServiceConfigurationType
     * $unifiedMessagingConfiguration
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ProtectionRulesServiceConfigurationType
     * $protectionRulesConfiguration
     */
    protected $protectionRulesConfiguration = null;
}
