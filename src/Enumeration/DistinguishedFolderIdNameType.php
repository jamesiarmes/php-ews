<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents default calendar ids.
 *
 * @package php-ews\Enumeration
 */
class DistinguishedFolderIdNameType extends Enumeration
{
    /**
     * Represents the admin audit logs folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ADMIN_AUDIT_LOGS = 'adminauditlogs';

    /**
     * Represents the archive deleted items folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_DELETED = 'archivedeleteditems';

    /**
     * Represents the archive Inbox folder.
     *
     * @since Exchange 2013 CU5
     *
     * @var string
     */
    const ARCHIVE_INBOX = 'archiveinbox';

    /**
     * Represents the root archive message folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_MESSAGE_ROOT = 'archivemsgfolderroot';

    /**
     * Represents the archive recoverable items deletions folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_RECOVERABLE_DELETIONS = 'Archiverecoverableitemsdeletions';

    /**
     * Represents the archive recoverable items purges folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_RECOVERABLE_PURGES = 'Archiverecoverableitemspurges';

    /**
     * Represents the archive recoverable items root folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_RECOVERABLE_ROOT = 'archiverecoverableitemsroot';

    /**
     * Represents the archive recoverable items versions folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_RECOVERABLE_VERSIONS = 'Archiverecoverableitemsversions';

    /**
     * Represents the root archive folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ARCHIVE_ROOT = 'archiveroot';

    /**
     * Represents the Calendar folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR = 'calendar';

    /**
     * Represents the conflicts folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONFLICTS = 'conflicts';

    /**
     * Represents the Contacts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS = 'contacts';

    /**
     * Represents the conversation history folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_HISTORY = 'conversationhistory';

    /**
     * Represents the Deleted Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DELETED = 'deleteditems';

    /**
     * Represents the directory folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DIRECTORY = 'directory';

    /**
     * Represents the Drafts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DRAFTS = 'drafts';

    /**
     * Represents the Favorites folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const FAVORITES = 'favorites';

    /**
     * Represents the IM contact list folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const IM_CONTACT_LIST = 'imcontactlist';

    /**
     * Represents the Inbox folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INBOX = 'inbox';

    /**
     * Represents the Journal folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const JOURNAL = 'journal';

    /**
     * Represents the Junk E-mail folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const JUNK = 'junkemail';

    /**
     * Represents the local failures folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const LOCAL_FAILURES = 'localfailures';

    /**
     * Represents the message folder root.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_ROOT = 'msgfolderroot';

    /**
     * Represents the My Contacts folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MY_CONTACTS = 'mycontacts';

    /**
     * Represents the Notes folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTES = 'notes';

    /**
     * Represents the Outbox folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OUTBOX = 'outbox';

    /**
     * Represents the people connect folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PEOPLE_CONNECT = 'peopleconnect';

    /**
     * Indicates the URL of the public folders root folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PUBLIC_FOLDERS_ROOT = 'publicfoldersroot';

    /**
     * Represents the quick contacts folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const QUICK_CONTACTS = 'quickcontacts';

    /**
     * Represents the recipient cache folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const RECIPIENT_CACHE = 'recipientcache';

    /**
     * Represents the dumpster deletions folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECOVERABLE_DELETIONS = 'recoverableitemsdeletions';

    /**
     * Represents the dumpster purges folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECOVERABLE_PURGES = 'recoverableitemspurges';

    /**
     * Represents the dumpster root folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECOVERABLE_ROOT = 'recoverableitemsroot';

    /**
     * Represents the dumpster versions folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECOVERABLE_VERSIONS = 'recoverableitemsversions';

    /**
     * Represents the root of the mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ROOT = 'root';

    /**
     * Represents the Search Folders folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEARCH = 'searchfolders';

    /**
     * Represents the Sent Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SENT = 'sentitems';

    /**
     * Represents the server failures folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SERVER_FAILURES = 'serverfailures';

    /**
     * Represents the sync issues folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SYNC_ISSUES = 'syncissues';

    /**
     * Represents the Tasks folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASKS = 'tasks';

    /**
     * Represents the todo search folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TODO_SEARCH = 'todosearch';

    /**
     * Represents the Voice Mail folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const VOICE_MAIL = 'voicemail';
}
