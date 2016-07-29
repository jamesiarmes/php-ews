<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetInboxRulesResponseType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to a GetInboxRules operation request.
 *
 * @package php-ews\Response
 */
class GetInboxRulesResponseType extends ResponseMessageType
{
    /**
     * Represents an array of the rules in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRulesType
     */
    public $InboxRules;

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
