<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class SyncFolderItemsReadFlagType extends PhpEws\EWSType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;
}
