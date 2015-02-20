<?php
/**
 * Contains GetUserConfigurationResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a response that returns a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class GetUserConfigurationResponseMessageType extends EWSType
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
     * Contains a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationType
     */
    public $UserConfiguration;
}
