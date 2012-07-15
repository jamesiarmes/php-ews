<?php
/**
 * Definition of the FreeBusyView type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyView type
 */
class EWSType_FreeBusyView extends EWSType
{
    /**
     * FreeBusyViewType property
     *
     * @var EWSType_FreeBusyViewType
     */
    public $FreeBusyViewType;

    /**
     * MergedFreeBusy property
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * CalendarEventArray property
     *
     * @var EWSType_ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * @var EWSType_WorkingHours
     */
    public $WorkingHours;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FreeBusyViewType',
                'required' => false,
                'type' => 'FreeBusyViewType',
            ),
            array(
                'name' => 'MergedFreeBusy',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'CalendarEventArray',
                'required' => false,
                'type' => 'ArrayOfCalendarEvent',
            ),
            array(
                'name' => 'WorkingHours',
                'required' => false,
                'type' => 'WorkingHours',
            ),
        );
    }
}
