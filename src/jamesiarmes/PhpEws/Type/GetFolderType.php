<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to get a folder from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 */
class GetFolderType extends BaseRequestType
{
    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to get from a mailbox in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Identifies the properties to get for each folder identified in the
     * FolderIds element.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderResponseShapeType
     */
    public $FolderShape;
}
