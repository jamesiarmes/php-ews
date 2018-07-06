<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MeetingResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a meeting response in the Exchange store.
 *
 * @package php-ews\Type
 */
class MeetingResponseMessageType extends MeetingMessageType
{
    /**
     * Indicates the date and time of a proposed start for the meeting.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ProposedStart;

    /**
     * Indicates the date and time of a proposed end for the meeting.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ProposedEnd;
}
