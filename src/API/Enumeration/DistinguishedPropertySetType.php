<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\DistinguishedPropertySetType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Defines the well-known property set IDs for extended MAPI properties.
 *
 * @package php-ews\Enumeration
 */
class DistinguishedPropertySetType extends Enumeration
{
    /**
     * Identifies the address property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ADDRESS = 'Address';

    /**
     * Identifies the appointment property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const APPOINTMENT = 'Appointment';

    /**
     * Identifies the calendar assistant property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ASSISTANT = 'CalendarAssistant';

    /**
     * Identifies the common property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const COMMON = 'Common';

    /**
     * Identifies the Internet headers property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INTERNET_HEADERS = 'InternetHeaders';

    /**
     * Identifies the meeting property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING = 'Meeting';

    /**
     * Identifies the public strings property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PUBLIC_STRINGS = 'PublicStrings';

    /**
     * Indicates a task.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const TASK = 'Task';

    /**
     * Identifies the unified messaging property set ID by name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNIFIED_MESSAGING = 'UnifiedMessaging';
}
