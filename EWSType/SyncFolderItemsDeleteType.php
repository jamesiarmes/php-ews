<?php
/**
 * Definition of the SyncFolderItemsDeleteType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsDeleteType type
 */
class EWSType_SyncFolderItemsDeleteType extends EWSType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
        );
    }
}
