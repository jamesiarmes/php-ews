<?php
/**
 * Definition of the GetRoomListsReponseType type
 * 
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetRoomListsReponseType type
 */
class EWSType_GetRoomListsReponseType extends EWSType
{
    /**
     * MessageText property
     *
     * @var string
     */
    public $MessageText;

    /**
     * ReponseCode property
     *
     * @var string
     */
    public $ResponseCode;

    /**
     * DescriptiveLinkKey property
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * MessageXml property
     *
     * @var EWSType_MessageXml
     */
    public $MessageXml;

    /**
     * RoomLists property
     *
     * @var EWSType_RoomListsType
     */
    public $RoomLists;
}
