<?php
/**
 * Contains EWSType_FreeBusyViewOptionsType.
 */

/**
 * Represents the type of free/busy information returned in a response.
 *
 * @package php-ews\Types
 */
class EWSType_FreeBusyViewOptionsType extends EWSType
{
    /**
     * Represents the time difference between two successive slots in the
     * FreeBusyMerged view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * Defines the type of calendar information that a client requests.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FreeBusyViewType
     */
    public $RequestedView;

    /**
     * Identifies the time span queried for the user availability information.
     *
     * @since Exchange 2007
     *
     * @var EWSType_Duration
     */
    public $TimeWindow;
}
