<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SetFolderFieldType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an update that sets the value for a single property on a folder in
 * an UpdateFolder operation.
 *
 * @package php-ews\Type
 */
class SetFolderFieldType extends FolderChangeDescriptionType
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
     * Identifies a folder to update.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a search folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TasksFolderType
     */
    public $TasksFolder;
}
