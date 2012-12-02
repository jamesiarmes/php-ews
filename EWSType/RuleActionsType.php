<?php
/**
 * Contains EWSType_RuleActionsType.
 */

/**
 * Represents the set of actions that are available to be taken on a message
 * when conditions are fulfilled.
 *
 * @package php-ews\Types
 */
class EWSType_RuleActionsType extends EWSType
{
    /**
     * Represents the categories that are stamped on e-mail messages.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $AssignCategories;

    /**
     * Identifies the ID of the folder that e-mail items will be copied to.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_TargetFolderIdType
     */
    public $CopyToFolder;

    /**
     * Indicates whether messages are to be moved to the Deleted Items folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $Delete;

    /**
     * Indicates the e-mail addresses to which messages are to be forwarded as
     * attachments.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfEmailAddressesType
     */
    public $ForwardAsAttachmentToRecipients;

    /**
     * Indicates the e-mail addresses to which messages are to be forwarded.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfEmailAddressesType
     */
    public $ForwardToRecipients;

    /**
     * Specifies the importance that is to be stamped on messages.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ImportanceChoicesType
     */
    public $MarkImportance;

    /**
     * Indicates whether messages are to be marked as read.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $MarkAsRead;

    /**
     * Identifies the ID of the folder that e-mail items will be moved to.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_TargetFolderIdType
     */
    public $MoveToFolder;

    /**
     * Indicates whether messages are to be permanently deleted and not saved to
     * the Deleted Items folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $PermanentDelete;

    /**
     * Indicates the e-mail addresses to which messages are to be redirected.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfEmailAddressesType
     */
    public $RedirectToRecipients;

    /**
     * Indicates the mobile phone numbers to which a Short Message Service (SMS)
     * alert is to be sent.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfEmailAddressesType
     */
    public $SendSMSAlertToRecipients;

    /**
     * Indicates the ID of the template message that is to be sent as a reply to
     * incoming messages.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ItemIdType
     */
    public $ServerReplyWithMessage;

    /**
     * Indicates whether subsequent rules are to be evaluated.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $StopProcessingRules;
}
