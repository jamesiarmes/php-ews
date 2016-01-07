<?php
/**
 * Contains EWSType_RefreshSharingFolderType.
 */

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_RefreshSharingFolderType extends EWSType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var EWSType_FolderIdType
     */
    public $SharingFolderId;
}
