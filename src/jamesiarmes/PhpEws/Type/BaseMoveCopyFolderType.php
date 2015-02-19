<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseMoveCopyFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class for folder move and copy requests.
 *
 * @package php-ews\Types
 */
class BaseMoveCopyFolderType extends BaseRequestType
{
    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
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
