<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SearchItemKindType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Defines the type of item to search for.
 *
 * @package php-ews\Enumeration
 */
class SearchItemKindType extends Enumeration
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
}
