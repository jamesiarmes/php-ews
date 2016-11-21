<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\ArchiveItemType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines the source folder Id and an array of item Ids for the associated
 * archive item.
 *
 * @package php-ews\Request
 */
class ArchiveItemType extends BaseRequestType
{
    /**
     * Specifies the Id of the source folder for the archive item.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $ArchiveSourceFolderId;

    /**
     * Contains the unique identities of items to archive.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
