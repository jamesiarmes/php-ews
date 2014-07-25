<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends DataType
{
    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;
}
