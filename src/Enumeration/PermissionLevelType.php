<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\PermissionLevelType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the permission level that a user has on a folder.
 *
 * @package php-ews\Enumeration
 */
class PermissionLevelType extends Enumeration
{
    /**
     * Indicates that the user can create and read all items in the folder, and
     * edit and delete only items that the user creates.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const AUTHOR = 'Author';

    /**
     * Indicates that the user can create items in the folder.
     *
     * The contents of the folder do not appear.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const CONTRIBUTOR = 'Contributor';

    /**
     * Indicates that the user has custom access permissions on the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const CUSTOM = 'Custom';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EDITOR = 'Editor';

    /**
     * Indicates that the user can create and read all items in the folder, and
     * delete only items that the user creates.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NON_EDITING_AUTHOR = 'NoneditingAuthor';

    /**
     * Indicates that the user has no permissions on the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder, and create subfolders.
     *
     * The user is both folder owner and folder contact.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const OWNER = 'Owner';

    /**
     * Indicates that the user can create and read all items in the folder,
     * edit and delete only items that the user creates, and create subfolders.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const PUBLISHING_AUTHOR = 'PublishingAuthor';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder, and create subfolders.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const PUBLISHING_EDITOR = 'PublishingEditor';

    /**
     * Indicates that the user can read all items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const REVIEWER = 'Reviewer';
}
