<?php
/**
 * Contains SearchItemKindType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the type of item to search for.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class SearchItemKindType extends EWSType
{
    /**
     * Indicates that contacts are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONTACT = 'Contacts';

    /**
     * Indicates that documents are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DOCUMENT = 'Docs';

    /**
     * Indicates that email messages are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const EMAIL = 'Email';

    /**
     * Indicates that faxes are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const FAX = 'Faxes';

    /**
     * Indicates that instant messages are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INSTANT_MESSAGE = 'Im';

    /**
     * Indicates that journals are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const JOURNAL = 'Journals';

    /**
     * Indicates that meetings are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MEETING = 'Meetings';

    /**
     * Indicates that notes are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NOTE = 'Notes';

    /**
     * Indicates that posts are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const POST = 'Posts';

    /**
     * Indicates that RSS feeds are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const RSS_FEEDS = 'Rssfeeds';

    /**
     * Indicates that tasks are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TASK = 'Tasks';

    /**
     * Indicates that voice mails are searched for keywords.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const VOICEMAIL = 'Voicemail';

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
