<?php
/**
 * Contains EWSType_FindFolderResponseMessageType.
 */

/**
 * Represents the status and result of a single FindFolder operation request.
 *
 * @package php-ews\Types
 */
class EWSType_FindFolderResponseMessageType extends EWSType
{
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

    /**
     * Contains the results from a search of a single root folder during a
     * FindFolder operation.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FindFolderParentType
     */
    public $RootFolder;
}
