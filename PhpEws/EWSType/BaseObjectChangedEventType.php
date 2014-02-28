<?php
/**
 * Definition of the BaseObjectChangedEventType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEventType extends PhpEws\EWSType
{
    /**
     * TimeStamp property
     *
     * @var dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;
}
