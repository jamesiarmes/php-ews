<?php
/**
 * Contains EWSType_UpdateItemResponseMessageType.
 */

/**
 * Represents the status and result of a single UpdateItem request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ItemInfoResponseMessageType.
 */
class EWSType_UpdateItemResponseMessageType extends EWSType
{
    /**
     * Contains the number of conflicts in an UpdateItem response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ConflictResultsType
     */
    public $ConflictResults;

    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Contains an array of created items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
