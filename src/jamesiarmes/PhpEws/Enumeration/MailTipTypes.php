<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\MailTipTypes.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the types of mail tips requested from the service.
 *
 * @package php-ews\Enumeration
 */
class MailTipTypes extends Enumeration
{
    /**
     * Represents all available mail tips.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * Represents a custom mail tip.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CUSTOM_MAIL_TIP = 'CustomMailTip';

    /**
     * Indicates whether delivery restrictions will prevent the sender's message
     * from reaching the recipient.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DELIVERY_RESTRICTION = 'DeliveryRestriction';

    /**
     * Represents the count of external members.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXTERNAL_MEMBER_COUNT = 'ExternalMemberCount';

    /**
     * Indicates whether the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_RECIPIENT = 'InvalidRecipient';

    /**
     * Represents the status for a mailbox that is full.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MAILBOX_FULL_STATUS = 'MailboxFullStatus';

    /**
     * Represents the maximum message size a recipient can accept.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MAX_MESSAGE_SIZE = 'MaxMessageSize';

    /**
     * Indicates whether the sender's message will be reviewed by a moderator.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MODERATION_STATUS = 'ModerationStatus';

    /**
     * Represents the Out of Office (OOF) message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OUT_OF_OFFICE_MESSAGE = 'OutOfOfficeMessage';

    /**
     * Represents the count of all members.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TOTAL_MEMBER_COUNT = 'TotalMemberCount';
}
