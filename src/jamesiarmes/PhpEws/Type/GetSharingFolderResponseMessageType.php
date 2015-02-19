<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetSharingFolderResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single GetSharingFolder operation
 * request.
 *
 * @package php-ews\Types
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
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
