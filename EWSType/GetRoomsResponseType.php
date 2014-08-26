<?php
/**
 * Definition of the GetRoomsReponseType type
 * 
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetRoomsReponseType type
 */
class EWSType_GetRoomsReponseType extends EWSType
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
     * Rooms property
     *
     * @var EWSType_RoomsType
     */
    public $Rooms;
}
