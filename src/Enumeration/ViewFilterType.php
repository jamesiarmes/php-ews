<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ViewFilterType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the view filter type for a FindConversation operation.
 *
 * @package php-ews\Enumeration
 */
class ViewFilterType extends Enumeration
{
    /**
     * Find all conversations.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * For internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CLUTTER = 'Clutter';

    /**
     * Find flagged conversations.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const FLAGGED = 'Flagged';

    /**
     * Find conversations with attachments.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HAS_ATTACHMENT = 'HasAttachment';

    /**
     * For internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NO_CLUTTER = 'NoClutter';

    /**
     * Find active tasks.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TASK_ACTIVE = 'TaskActive';

    /**
     * Find completed tasks.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TASK_COMPLETED = 'TaskCompleted';

    /**
     * Find overdue tasks.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TASK_OVERDUE = 'TaskOverdue';

    /**
     * Find conversations addressed or cc'd to me.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TO_OR_CC_ME = 'ToOrCcMe';

    /**
     * Find unread conversations.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UNREAD = 'Unread';
}
