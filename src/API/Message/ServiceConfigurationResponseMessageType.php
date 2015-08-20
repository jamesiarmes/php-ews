<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\MailTipsServiceConfigurationType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\jamesiarmes\PEWS\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method \jamesiarmes\PEWS\API\Type\UnifiedMessageServiceConfigurationType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\jamesiarmes\PEWS\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method \jamesiarmes\PEWS\API\Type\ProtectionRulesServiceConfigurationType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\jamesiarmes\PEWS\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\MailTipsServiceConfigurationType
     */
    protected $mailTipsConfiguration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\UnifiedMessageServiceConfigurationType
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ProtectionRulesServiceConfigurationType
     */
    protected $protectionRulesConfiguration = null;
}
