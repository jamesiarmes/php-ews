<?php
/**
 * Contains EWSType_MeetingRequestTypeType.
 */

/**
 * Describes the type of a meeting request.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MeetingRequestTypeType extends EWSType
{
    /**
     * Identifies the meeting request as a full update to an existing request.
     *
     * A full update has updated time and informational content.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FULL_UPDATE = 'FullUpdate';

    /**
     * Identifies the meeting request as only containing updated informational
     * content.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INFORMATIONAL_UPDATE = 'InformationalUpdate';

    /**
     * Identifies the meeting request as a new meeting request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NEW_MEETING_REQUEST = 'NewMeetingRequest';

    /**
     * Indicates that the meeting request type is not defined.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Identifies the meeting request as outdated.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OUTDATED = 'Outdated';

    /**
     * Indicates that the meeting request belongs to a principal who has
     * forwarded meeting messages to a delegate and has his copies marked as
     * informational.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PRINCIPAL_WANTS_COPY = 'PrincipalWantsCopy';

    /**
     * Identifies the meeting request as a silent update to an existing meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SILENT_UPDATE = 'SilentUpdate';

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
