<?php
/**
 * Contains ServiceConfigurationResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents service configuration settings.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class ServiceConfigurationResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Contains service configuration information for the mail tips service.
     *
     * @since Exchange 2010
     *
     * @var MailTipsServiceConfiguration
     */
    public $MailTipsConfiguration;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Contains service configuration information for the protection rules
     * service.
     *
     * @since Exchange 2010
     *
     * @var ProtectionRulesServiceConfiguration
     */
    public $ProtectionRulesConfiguration;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Contains service configuration information for the Unified Messaging
     * service.
     *
     * @since Exchange 2010
     *
     * @var UnifiedMessageServiceConfiguration
     */
    public $UnifiedMessagingConfiguration;
}
