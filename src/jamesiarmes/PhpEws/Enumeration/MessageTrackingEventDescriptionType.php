<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\MessageTrackingEventDescriptionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Class description...
 *
 * @package php-ews\Enumeration
 */
class MessageTrackingEventDescriptionType extends Enumeration
{
    /**
     * Indicates the event is for a message that has been approved.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const APPROVED_MODERATION = 'ApprovedModeration';

    /**
     * Indicates the event is for a message that has been delayed after
     * transferring to a partner organization.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DELAYED_AFTER_TRANSFER_TO_PARTNER_ORG = 'DelayedAfterTransferToPartnerOrg';

    /**
     * Indicates the event is for a delivered message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DELIVERED = 'Delivered';

    /**
     * Indicates the event is for an expanded message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXPANDED = 'Expanded';

    /**
     * Indicates the event is for a message that failed with a general error.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FAILED_GENERAL = 'FailedGeneral';

    /**
     * Indicates the event is for a message that failed moderation.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FAILED_MODERATION = 'FailedModeration';

    /**
     * Indicates the event is for a message that failed transport rules.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FAILED_TRANSPORT_RULES = 'FailedTransportRules';

    /**
     * Indicates the event is for a forwarded message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FORWARDED = 'Forwarded';

    /**
     * Indicates the event is for a message that was deferred.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MESSAGE_DEFER = 'MessageDefer';

    /**
     * Indicates the event is for a message that was moved by an inbox rule.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MOVED_TO_FOLDER_BY_INBOX_RULE = 'MovedToFolderByInboxRule';

    /**
     * Indicates the event is for a not read message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NOT_READ = 'NotRead';

    /**
     * Indicates the event is for a pending message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PENDING = 'Pending';

    /**
     * Indicates the event is for a message pending moderation.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PENDING_MODERATION = 'PendingModeration';

    /**
     * Indicates the event is for a message that was queued to be retried.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const QUEUE_RETRY = 'QueueRetry';

    /**
     * Indicates the event is for a queued to be retried without a time.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const QUEUE_RETRY_NO_RETRY_TIME = 'QueueRetryNoRetryTime';

    /**
     * Indicates the event is for a read message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const READ = 'Read';

    /**
     * Indicates the event is for a resolved message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RESOLVED = 'Resolved';

    /**
     * Indicates the event is for a message that was CCed by a rule.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RULES_CC = 'RulesCc';

    /**
     * Indicates the event is for a message that was received via SMTP.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SMTP_RECEIVE = 'SmtpReceive';

    /**
     * Indicates the event is for a message that was sent via SMTP.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SMTP_SEND = 'SmtpSend';

    /**
     * Indicates the event is for a message that was sent cross forest via SMTP.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SMTP_SEND_CROSS_FOREST = 'SmtpSendCrossForest';

    /**
     * Indicates the event is for a message that was sent cross site via SMTP.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SMTP_SEND_CROSS_SITE = 'SmtpSendCrossSite';

    /**
     * Indicates the event is for a submitted message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SUBMITTED = 'Submitted';

    /**
     * Indicates the event is for a message that was transferred to a foreign
     * organization.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TRANSFERRED_TO_FOREIGN_ORG = 'TransferredToForeignOrg';

    /**
     * Indicates the event is for a message that was transferred to a legacy
     * exchange server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TRANSFERRED_TO_LEGACY_EXCHANGE_SERVER = 'TransferredToLegacyExchangeServer';

    /**
     * Indicates the event is for a message that was transferred to a partner
     * organization.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TRANSFERRED_TO_PARTNER_ORG = 'TransferredToPartnerOrg';
}
