<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsResponseMessageType type
 */
class SyncFolderItemsResponseMessageType extends DataType
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
