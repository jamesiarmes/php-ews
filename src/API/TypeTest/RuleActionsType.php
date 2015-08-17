<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RuleActionsType
 *
 * Rule actions
 * XSD Type: RuleActionsType
 *
 * @method RuleActionsType getAssignCategories()
 * @method RuleActionsType setAssignCategories(array $assignCategories)
 * @method RuleActionsType getCopyToFolder()
 * @method RuleActionsType setCopyToFolder(TargetFolderIdType $copyToFolder)
 * @method RuleActionsType getDelete()
 * @method RuleActionsType setDelete(boolean $delete)
 * @method RuleActionsType getForwardAsAttachmentToRecipients()
 * @method RuleActionsType setForwardAsAttachmentToRecipients(array $forwardAsAttachmentToRecipients)
 * @method RuleActionsType getForwardToRecipients()
 * @method RuleActionsType setForwardToRecipients(array $forwardToRecipients)
 * @method RuleActionsType getMarkImportance()
 * @method RuleActionsType setMarkImportance(string $markImportance)
 * @method RuleActionsType getMarkAsRead()
 * @method RuleActionsType setMarkAsRead(boolean $markAsRead)
 * @method RuleActionsType getMoveToFolder()
 * @method RuleActionsType setMoveToFolder(TargetFolderIdType $moveToFolder)
 * @method RuleActionsType getPermanentDelete()
 * @method RuleActionsType setPermanentDelete(boolean $permanentDelete)
 * @method RuleActionsType getRedirectToRecipients()
 * @method RuleActionsType setRedirectToRecipients(array $redirectToRecipients)
 * @method RuleActionsType getSendSMSAlertToRecipients()
 * @method RuleActionsType setSendSMSAlertToRecipients(array $sendSMSAlertToRecipients)
 * @method RuleActionsType getServerReplyWithMessage()
 * @method RuleActionsType setServerReplyWithMessage(ItemIdType $serverReplyWithMessage)
 * @method RuleActionsType getStopProcessingRules()
 * @method RuleActionsType setStopProcessingRules(boolean $stopProcessingRules)
 */
class RuleActionsType extends TypeTest
{

    /**
     * @property string[] $assignCategories
     */
    protected $assignCategories = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $copyToFolder
     */
    protected $copyToFolder = null;

    /**
     * @property boolean $delete
     */
    protected $delete = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[]
     * $forwardAsAttachmentToRecipients
     */
    protected $forwardAsAttachmentToRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $forwardToRecipients
     */
    protected $forwardToRecipients = null;

    /**
     * @property string $markImportance
     */
    protected $markImportance = null;

    /**
     * @property boolean $markAsRead
     */
    protected $markAsRead = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $moveToFolder
     */
    protected $moveToFolder = null;

    /**
     * @property boolean $permanentDelete
     */
    protected $permanentDelete = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[]
     * $redirectToRecipients
     */
    protected $redirectToRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[]
     * $sendSMSAlertToRecipients
     */
    protected $sendSMSAlertToRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $serverReplyWithMessage
     */
    protected $serverReplyWithMessage = null;

    /**
     * @property boolean $stopProcessingRules
     */
    protected $stopProcessingRules = null;


}

