<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends EWSType
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
