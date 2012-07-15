<?php
/**
 * Definition of the CreateItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateItemType type
 */
class EWSType_CreateItemType extends EWSType
{
    /**
     * SavedItemFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Items property
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * MessageDisposition property
     *
     * @var EWSType_MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitations property
     *
     * @var EWSType_CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SavedItemFolderId',
                'required' => false,
                'type' => 'TargetFolderIdType',
            ),
            array(
                'name' => 'Items',
                'required' => false,
                'type' => 'NonEmptyArrayOfAllItemsType',
            ),
            array(
                'name' => 'MessageDisposition',
                'required' => false,
                'type' => 'MessageDispositionType',
            ),
            array(
                'name' => 'SendMeetingInvitations',
                'required' => false,
                'type' => 'CalendarItemCreateOrDeleteOperationType',
            ),
        );
    }
}
