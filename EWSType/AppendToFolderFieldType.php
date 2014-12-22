<?php
/**
 * Contains EWSType_AppendToFolderFieldType.
 */

/**
 * This type element is not implemented. Any request that uses this type will
 * always return an error response.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_FolderChangeDescriptionType.
 */
class EWSType_AppendToFolderFieldType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to update.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderType
     */
    public $Folder;

    /**
     * Represents a search folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TasksFolderType
     */
    public $TasksFolder;
}
