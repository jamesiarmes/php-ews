<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends PhpEws\EWSType
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;
}
