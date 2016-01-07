<?php
/**
 * Contains EWSType_CalendarPermissionReadAccessType
 */

/**
 * Indicates whether a user has permission to read items within a Calendar
 * folder.
 *
 * @package php-ews\Enumerations
 *
 * @todo Extend EWSType_PermissionReadAccessType.
 */
class EWSType_CalendarPermissionReadAccessType extends EWSType
{
    /**
     * Indicates that the user has permission to read all items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const FULL_DETAILS = 'FullDetails';

    /**
     * Indicates that the user does not have permission to read items in the
     * folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Indicates that the user has permission to view only free/busy time in the\
     * calendar.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const TIME_ONLY = 'TimeOnly';

    /**
     * Indicates that the user has permission to view free/busy time in the
     * calendar and the subject and location of appointments.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const TIME_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
