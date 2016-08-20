<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\BaseMoveCopyFolderType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Base class for folder move and copy requests.
 *
 * @package php-ews\Request
 */
class BaseMoveCopyFolderType extends BaseRequestType
{
    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $ToFolderId;
}
