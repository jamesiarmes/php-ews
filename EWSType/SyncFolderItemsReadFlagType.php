<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SyncFolderItemsReadFlagType type
 */
class EWSType_SyncFolderItemsReadFlagType extends EWSType
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
            array(
                'name' => 'IsRead',
                'required' => false,
                'type' => 'boolean',
            ),
        );
    }
}
