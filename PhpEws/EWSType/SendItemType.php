<?php
/**
 * Definition of the SendItemType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SendItemType type
 */
class SendItemType extends PhpEws\EWSType
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * SaveItemToFolder property
     *
     * @var boolean
     */
    public $SaveItemToFolder;
}
