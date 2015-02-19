<?php
/**
 * Contains EWSType_NonEmptyArrayOfFoldersType.
 */

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfFoldersType extends EWSType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TasksFolderType
     */
    public $TasksFolder;
}
