<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\BaseMoveCopyItemType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Base class for item copy and move operations.
 *
 * @package php-ews\Request
 */
class BaseMoveCopyItemType extends BaseRequestType
{
    /**
     * Contains an array of identified items to copy or move to the folder
     * represented by the ToFolderId element.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Indicates whether the item identifiers of new items are returned in the
     * response.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $ReturnNewItemIds;

    /**
     * Represents the destination folder for the items.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $ToFolderId;
}
