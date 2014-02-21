<?php
/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 */
class NonEmptyArrayOfBaseFolderIdsType extends PhpEws\EWSType
{
    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
}
