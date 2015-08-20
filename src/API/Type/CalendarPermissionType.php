<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarPermissionType
 *
 *
 * XSD Type: CalendarPermissionType
 *
 * @method string getReadItems()
 * @method CalendarPermissionType setReadItems(string $readItems)
 * @method string getCalendarPermissionLevel()
 * @method CalendarPermissionType setCalendarPermissionLevel(string $calendarPermissionLevel)
 */
class CalendarPermissionType extends BasePermissionType
{

    /**
     * @var string
     */
    protected $readItems = null;

    /**
     * @var string
     */
    protected $calendarPermissionLevel = null;
}
