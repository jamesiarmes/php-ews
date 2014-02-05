<?php
/**
 * Definition of the MoveItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MoveItemType type
 */
class EWSType_MoveItemType extends EWSType
{
    /**
     * ToFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * DistinguishedFolderId property
     * 
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
