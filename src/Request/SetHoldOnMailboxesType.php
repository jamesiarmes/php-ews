<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\SetHoldOnMailboxesType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to set a mailbox hold policy on mailboxes.
 *
 * @package php-ews\Request
 */
class SetHoldOnMailboxesType extends BaseRequestType
{
    /**
     * Indicates the type of action for the hold.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\HoldActionType
     */
    public $ActionType;

    /**
     * Indicates whether the search result should remove duplicate items.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $Deduplication;

    /**
     * Contains the mailbox hold identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $HoldId;

    /**
     * Specifies the identity of a hold that preserves the mailbox items.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $InPlaceHoldIdentity;

    /**
     * Indicates whether to include items that cannot be indexed.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IncludeNonIndexableItems;

    /**
     * Specifies the amount of time to hold content that matches the mailbox
     * query.
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     */
    public $ItemHoldPeriod;

    /**
     * Contains the language used for the search query.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Language;

    /**
     * Contains a list of mailboxes affected by the hold.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Mailboxes;

    /**
     * Contains the search query for the hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Query;
}
