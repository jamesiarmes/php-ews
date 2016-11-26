<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\RetentionActionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the action performed on items with the retention tag.
 *
 * @package php-ews\Enumeration
 */
class RetentionActionType extends Enumeration
{
    /**
     * The item is deleted and put into the Dumpster.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DELETE_AND_ALLOW_RECOVERY = 'DeleteAndAllowRecovery';

    /**
     * The item is marked as having exceeded the retention time limit.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MARK_AS_PAST_RETENTION_LIMIT = 'MarkAsPastRetentionLimit';

    /**
     * The item is moved to the archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MOVE_TO_ARCHIVE = 'MoveToArchive';

    /**
     * The item is moved to the default Deleted Items folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    /**
     * The item is moved to a specified folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MOVE_TO_FOLDER = 'MoveToFolder';

    /**
     * No action is performed on the item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * The item is permanently deleted from the mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERMANENTLY_DELETE = 'PermanentlyDelete';
}
