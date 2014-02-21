<?php
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 */
class SyncFolderItemsResponseMessageType extends PhpEws\EWSType
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
     * @var SyncFolderItemsChangesType
     */
    public $Changes;
}
