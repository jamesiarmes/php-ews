<?php
/**
 * Contains EWSType_GetInboxRulesResponseType.
 */

/**
 * Defines a response to a GetInboxRules operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_GetInboxRulesResponseType extends EWSType
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
     * Represents an array of the rules in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfRulesType
     */
    public $InboxRules;

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
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Indicates whether a Microsoft Outlook rule blob exists in the user's
     * mailbox.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $OutlookRuleBlobExists;
}
