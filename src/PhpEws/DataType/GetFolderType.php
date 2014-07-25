<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the GetFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends DataType
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
