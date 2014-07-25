<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the BaseMoveCopyItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItemType extends DataType
{
    /**
     * ToFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
