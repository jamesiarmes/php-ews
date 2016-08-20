<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AppendToFolderFieldType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * This type element is not implemented. Any request that uses this type will
 * always return an error response.
 *
 * @package php-ews\Type
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
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
