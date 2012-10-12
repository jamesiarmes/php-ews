<?php
/**
 * Definition of the SendItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SendItemType type
 */
class EWSType_SendItemType extends EWSType
{
    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * SavedItemFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * SaveItemToFolder property
     *
     * @var boolean
     */
    public $SaveItemToFolder;
}
