<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RuleActionsType
 *
 * Rule actions
 * XSD Type: RuleActionsType
 *
 * @method array getAssignCategories()
 * @method RuleActionsType setAssignCategories(array $assignCategories)
 * @method TargetFolderIdType getCopyToFolder()
 * @method RuleActionsType setCopyToFolder(TargetFolderIdType $copyToFolder)
 * @method boolean getDelete()
 * @method RuleActionsType setDelete(boolean $delete)
 * @method array getForwardAsAttachmentToRecipients()
 * @method RuleActionsType setForwardAsAttachmentToRecipients(array $forwardAsAttachmentToRecipients)
 * @method array getForwardToRecipients()
 * @method RuleActionsType setForwardToRecipients(array $forwardToRecipients)
 * @method string getMarkImportance()
 * @method RuleActionsType setMarkImportance(string $markImportance)
 * @method boolean getMarkAsRead()
 * @method RuleActionsType setMarkAsRead(boolean $markAsRead)
 * @method TargetFolderIdType getMoveToFolder()
 * @method RuleActionsType setMoveToFolder(TargetFolderIdType $moveToFolder)
 * @method boolean getPermanentDelete()
 * @method RuleActionsType setPermanentDelete(boolean $permanentDelete)
 * @method array getRedirectToRecipients()
 * @method RuleActionsType setRedirectToRecipients(array $redirectToRecipients)
 * @method array getSendSMSAlertToRecipients()
 * @method RuleActionsType setSendSMSAlertToRecipients(array $sendSMSAlertToRecipients)
 * @method ItemIdType getServerReplyWithMessage()
 * @method RuleActionsType setServerReplyWithMessage(ItemIdType $serverReplyWithMessage)
 * @method boolean getStopProcessingRules()
 * @method RuleActionsType setStopProcessingRules(boolean $stopProcessingRules)
 */
class RuleActionsType extends Type
{

    /**
     * @var string[]
     */
    protected $assignCategories = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $copyToFolder = null;

    /**
     * @var boolean
     */
    protected $delete = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $forwardAsAttachmentToRecipients = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $forwardToRecipients = null;

    /**
     * @var string
     */
    protected $markImportance = null;

    /**
     * @var boolean
     */
    protected $markAsRead = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $moveToFolder = null;

    /**
     * @var boolean
     */
    protected $permanentDelete = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $redirectToRecipients = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $sendSMSAlertToRecipients = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $serverReplyWithMessage = null;

    /**
     * @var boolean
     */
    protected $stopProcessingRules = null;
}
