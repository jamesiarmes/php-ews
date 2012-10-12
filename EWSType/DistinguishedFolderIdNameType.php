<?php
/**
 * Definition of the DistinguishedFolderIdNameType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * URIs for the distinguished folders accessible from a mailbox
 */
class EWSType_DistinguishedFolderIdNameType extends EWSType
{
    /**
     * Calendar folder
     *
     * @var string
     */
    const CALENDAR = 'calendar';

    /**
     * Contacts folder
     *
     * @var string
     */
    const CONTACTS = 'contacts';

    /**
     * Deleted Items folder (ie. trash)
     *
     * @var string
     */
    const DELETED_ITEMS = 'deleteditems';

    /**
     * Drafts folder
     *
     * @var string
     */
    const DRAFTS = 'drafts';

    /**
     * Inbox folder
     *
     * @var string
     */
    const INBOX = 'inbox';

    /**
     * Journal folder
     *
     * @var string
     */
    const JOURNAL = 'journal';

    /**
     * Notes folder
     *
     * @var string
     */
    const NOTES = 'notes';

    /**
     * Outbox folder
     *
     * @var string
     */
    const OUTBOX = 'outbox';

    /**
     * Sent Items folder
     *
     * @var string
     */
    const SENT_ITEMS = 'sentitems';

    /**
     * Tasks folder
     *
     * @var string
     */
    const TASKS = 'tasks';

    /**
     * Root of the message folders
     *
     * @var string
     */
    const MESSAGE_FOLDER_ROOT = 'msgfolderroot';

    /**
     * Root of the public folders
     *
     * @var string
     */
    const PUBLIC_FOLDERS_ROOT = 'publicfoldersroot';

    /**
     * Root of the user's mailbox
     *
     * @var string
     */
    const ROOT = 'root';

    /**
     * Junk Email folder
     *
     * @var string
     */
    const JUNK_EMAIL = 'junkemail';

    /**
     * Search folders
     *
     * @var string
     */
    const SEARCH_FOLDERS = 'searchfolders';

    /**
     * Voicemail folder
     *
     * @var string
     */
    const VOICEMAIL = 'voicemail';
}
