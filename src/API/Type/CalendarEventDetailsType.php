<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarEventDetailsType
 *
 *
 * XSD Type: CalendarEventDetails
 *
 * @method CalendarEventDetailsType getID()
 * @method CalendarEventDetailsType setID(string $iD)
 * @method CalendarEventDetailsType getSubject()
 * @method CalendarEventDetailsType setSubject(string $subject)
 * @method CalendarEventDetailsType getLocation()
 * @method CalendarEventDetailsType setLocation(string $location)
 * @method CalendarEventDetailsType getIsMeeting()
 * @method CalendarEventDetailsType setIsMeeting(boolean $isMeeting)
 * @method CalendarEventDetailsType getIsRecurring()
 * @method CalendarEventDetailsType setIsRecurring(boolean $isRecurring)
 * @method CalendarEventDetailsType getIsException()
 * @method CalendarEventDetailsType setIsException(boolean $isException)
 * @method CalendarEventDetailsType getIsReminderSet()
 * @method CalendarEventDetailsType setIsReminderSet(boolean $isReminderSet)
 * @method CalendarEventDetailsType getIsPrivate()
 * @method CalendarEventDetailsType setIsPrivate(boolean $isPrivate)
 */
class CalendarEventDetailsType extends Type
{

    /**
     * @property string $iD
     */
    protected $iD = null;

    /**
     * @property string $subject
     */
    protected $subject = null;

    /**
     * @property string $location
     */
    protected $location = null;

    /**
     * @property boolean $isMeeting
     */
    protected $isMeeting = null;

    /**
     * @property boolean $isRecurring
     */
    protected $isRecurring = null;

    /**
     * @property boolean $isException
     */
    protected $isException = null;

    /**
     * @property boolean $isReminderSet
     */
    protected $isReminderSet = null;

    /**
     * @property boolean $isPrivate
     */
    protected $isPrivate = null;


}

