<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MovedCopiedEventType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an event in which an item or folder is copied.
 *
 * @package php-ews\Type
 */
class MovedCopiedEventType extends BaseObjectChangedEventType
{
    /**
     * Represents the folder identifier of the original folder before it was
     * copied.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $OldFolderId;

    /**
     * Contains the unique identifier of the original item before it was copied.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $OldItemId;

    /**
     * Contains the identifier of the original parent folder of an item or
     * folder that was copied.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $OldParentFolderId;
}
