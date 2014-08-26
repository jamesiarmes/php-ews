<?php
/**
 * Definition of the RoomListType type
 * 
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RoomListType type
 */
class EWSType_RoomListType extends EWSType
{
    /**
     * Name (EmailAddressType) property
     *
     * @var EWSType_EmailAddressType
     */
    public $Name;

    /**
     * EmailAddress property
     *
     * @var EWSType_EmailAddress
     */
    public $EmailAddress;

    /**
     * RoutingType (EmailAddress) property
     *
     * @var EWSType_EmailAddress
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var EWSType_MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
