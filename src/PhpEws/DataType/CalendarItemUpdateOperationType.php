<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarItemUpdateOperationType type.
 */
class CalendarItemUpdateOperationType extends DataType
{
    /**
     * Send to no attendees.
     *
     * @var string
     */
    const SEND_TO_NONE = 'SendToNone';

    /**
     * Send to all attendees but do not save a copy.
     *
     * @var string
     */
    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    /**
     * Send to all attendees and save a copy.
     *
     * @var string
     */
    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    /**
     * Send to only the changed attendees but do not save a copy.
     *
     * @var string
     */
    const SEND_ONLY_TO_CHANGED = 'SendOnlyToChanged';

    /**
     * Send to only the changed attendees and save a copy.
     *
     * @var string
     */
    const SEND_TO_CHANGED_AND_SAVE_COPY = 'SendToChangedAndSaveCopy';
}
