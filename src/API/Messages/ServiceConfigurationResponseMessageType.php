<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method ServiceConfigurationResponseMessageType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType
 * setMailTipsConfiguration($mailTipsConfiguration)
 * @method ServiceConfigurationResponseMessageType
 * getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType
 * setUnifiedMessagingConfiguration($unifiedMessagingConfiguration)
 * @method ServiceConfigurationResponseMessageType
 * getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType
 * setProtectionRulesConfiguration($protectionRulesConfiguration)
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

