<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\RefreshSharingFolderType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package php-ews\Request
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
