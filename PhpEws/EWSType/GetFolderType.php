<?php
/**
 * Definition of the GetFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends EWSType
{
    /**
     * FolderShape property
     *
     * @var EWSType_FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
