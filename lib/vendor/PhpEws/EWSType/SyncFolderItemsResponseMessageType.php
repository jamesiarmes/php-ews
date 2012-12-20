<?php
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SyncFolderItemsResponseMessageType type
 */
class SyncFolderItemsResponseMessageType extends EWSType
{
    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Changes property
     *
     * @var EWSType_SyncFolderItemsChangesType
     */
    public $Changes;
}
