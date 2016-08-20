<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindMessageTrackingSearchResultType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a single message result for a FindMessageTrackingReportResponse
 * element.
 *
 * @package php-ews\Type
 */
class FindMessageTrackingSearchResultType extends Type
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
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * Contains contact information for the alleged sender of an e-mail message.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $PurportedSender;

    /**
     * Contains a list of e-mail addresses that received this message.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType
     */
    public $Recipients;

    /**
     * Contains the e-mail message sender’s address.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
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
