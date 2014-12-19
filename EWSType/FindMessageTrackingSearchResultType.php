<?php
/**
 * Contains EWSType_FindMessageTrackingSearchResultType.
 */

/**
 * Represents a single message result for a FindMessageTrackingReportResponse
 * element.
 *
 * @package php-ews\Types
 */
class EWSType_FindMessageTrackingSearchResultType extends EWSType
{
    /**
     * Contains the name of the server in the forest that first accepted the
     * message.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $FirstHopServer;

    /**
     * Contains an internal ID that identifies the message in the transport
     * database.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $MessageTrackingReportId;

    /**
     * Contains the name of the server in the forest that previously accepted
     * the message.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $PreviousHopServer;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * Contains contact information for the alleged sender of an e-mail message.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $PurportedSender;

    /**
     * Contains a list of e-mail addresses that received this message.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $Recipients;

    /**
     * Contains the e-mail message sender’s address.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $Sender;

    /**
     * Contains the e-mail message subject.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $Subject;

    /**
     * Contains the time that the message was submitted.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $SubmittedTime;
}
