<?php
/**
 * Contains FreeBusyViewOptionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the type of free/busy information returned in a response.
 *
 * @package jamesiarmes\EWS\Types
 */
class FreeBusyViewOptionsType extends EWSType
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
     * @var FreeBusyViewType
     */
    public $RequestedView;

    /**
     * Identifies the time span queried for the user availability information.
     *
     * @since Exchange 2007
     *
     * @var Duration
     */
    public $TimeWindow;
}
