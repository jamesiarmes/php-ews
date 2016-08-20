<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\NotificationEventTypeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of event a notification is for.
 *
 * @package php-ews\Enumeration
 */
class NotificationEventTypeType extends Enumeration
{
    /**
     * Indicates the notification is for an item copied event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const COPIED_EVENT = 'CopiedEvent';

    /**
     * Indicates the notification is for an item created event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CREATED_EVENT = 'CreatedEvent';

    /**
     * Indicates the notification is for an item deleted event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DELETED_EVENT = 'DeletedEvent';

    /**
     * Indicates the notification is for a free or busy change event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FREE_BUSY_CHANGED_EVENT = 'FreeBusyChangedEvent';

    /**
     * Indicates the notification is for an item modified event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MODIFIED_EVENT = 'ModifiedEvent';

    /**
     * Indicates the notification is for an item moved event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MOVED_EVENT = 'MovedEvent';

    /**
     * Indicates the notification is for a new mail event.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NEW_MAIL_EVENT = 'NewMailEvent';
}
