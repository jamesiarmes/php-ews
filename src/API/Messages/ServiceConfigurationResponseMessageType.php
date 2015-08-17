<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method ServiceConfigurationResponseMessageType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\jamesiarmes\PEWS\API\TypeTest\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method ServiceConfigurationResponseMessageType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\jamesiarmes\PEWS\API\TypeTest\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method ServiceConfigurationResponseMessageType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\jamesiarmes\PEWS\API\TypeTest\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MailTipsServiceConfigurationType
     * $mailTipsConfiguration
     */
    protected $mailTipsConfiguration = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UnifiedMessageServiceConfigurationType
     * $unifiedMessagingConfiguration
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ProtectionRulesServiceConfigurationType
     * $protectionRulesConfiguration
     */
    protected $protectionRulesConfiguration = null;


}

