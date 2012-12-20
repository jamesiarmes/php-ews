<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class SyncFolderItemsReadFlagType extends EWSType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;
}
