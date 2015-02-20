<?php
/**
 * Contains FindMailboxStatisticsByKeywords.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to search for mailbox statistics by keyword.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class FindMailboxStatisticsByKeywords extends EWSType
{
    /**
     * Specifies the date that the message was sent.Specifies an array of
     * recipients of a message.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $FromDate;

    /**
     * Specifies whether to include the personal archive in the search.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IncludePersonalArchive;

    /**
     * Specifies whether to include items that cannot be searched.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IncludeUnsearchableItems;

    /**
     * Specifies keywords for a search.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfStringsType
     */
    public $Keywords;

    /**
     * Contains the language used for the search query.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Language;

    /**
     * Contains an array of mailboxes affected by the hold.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfUserMailboxesType
     */
    public $Mailboxes;

    /**
     * Specifies an array of messages to search.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfSearchItemKindsType
     */
    public $MessageTypes;

    /**
     * Specifies an array of recipients of a message.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfSmtpAddressType
     */
    public $Recipients;

    /**
     * Specifies whether to search in deleted items.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $SearchDumpster;

    /**
     * Specifies an array of SMTP addresses.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfSmtpAddressType
     */
    public $Senders;

    /**
     * Specifies the date that the message was received.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ToDate;
}
