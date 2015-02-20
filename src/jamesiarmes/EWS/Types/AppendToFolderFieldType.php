<?php
/**
 * Contains AppendToFolderFieldType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * This type element is not implemented. Any request that uses this type will
 * always return an error response.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend FolderChangeDescriptionType.
 */
class AppendToFolderFieldType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to update.
     *
     * @since Exchange 2007
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * Represents a search folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
