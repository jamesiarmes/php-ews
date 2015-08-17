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
 * @method RuleActionsType setAssignCategories($assignCategories)
 * @method RuleActionsType getCopyToFolder()
 * @method RuleActionsType setCopyToFolder($copyToFolder)
 * @method RuleActionsType getDelete()
 * @method RuleActionsType setDelete($delete)
 * @method RuleActionsType getForwardAsAttachmentToRecipients()
 * @method RuleActionsType
 * setForwardAsAttachmentToRecipients($forwardAsAttachmentToRecipients)
 * @method RuleActionsType getForwardToRecipients()
 * @method RuleActionsType setForwardToRecipients($forwardToRecipients)
 * @method RuleActionsType getMarkImportance()
 * @method RuleActionsType setMarkImportance($markImportance)
 * @method RuleActionsType getMarkAsRead()
 * @method RuleActionsType setMarkAsRead($markAsRead)
 * @method RuleActionsType getMoveToFolder()
 * @method RuleActionsType setMoveToFolder($moveToFolder)
 * @method RuleActionsType getPermanentDelete()
 * @method RuleActionsType setPermanentDelete($permanentDelete)
 * @method RuleActionsType getRedirectToRecipients()
 * @method RuleActionsType setRedirectToRecipients($redirectToRecipients)
 * @method RuleActionsType getSendSMSAlertToRecipients()
 * @method RuleActionsType setSendSMSAlertToRecipients($sendSMSAlertToRecipients)
 * @method RuleActionsType getServerReplyWithMessage()
 * @method RuleActionsType setServerReplyWithMessage($serverReplyWithMessage)
 * @method RuleActionsType getStopProcessingRules()
 * @method RuleActionsType setStopProcessingRules($stopProcessingRules)
 */
class RuleActionsType extends TypeTest
{

    /**
     * @property array $assignCategories
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
     * @property array $forwardAsAttachmentToRecipients
     */
    protected $forwardAsAttachmentToRecipients = null;

    /**
     * @property array $forwardToRecipients
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
     * @property array $redirectToRecipients
     */
    protected $redirectToRecipients = null;

    /**
     * @property array $sendSMSAlertToRecipients
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

