<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RefreshSharingFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package php-ews\Types
 */
class RefreshSharingFolderType extends BaseRequestType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     */
    public $SharingFolderId;
}
