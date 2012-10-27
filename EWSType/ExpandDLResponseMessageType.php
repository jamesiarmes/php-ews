<?php
/**
 * Contains EWSType_ExpandDLResponseMessageType.
 */

/**
 * Represents the status and result of a single ExpandDL operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_ExpandDLResponseMessageType extends EWSType
{
    /**
     * Represents the next denominator to use for the next request when doing\
     * fractional paging.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AbsoluteDenominator;

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
     * Contains an array of mailboxes that are contained in a distribution list.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfDLExpansionType
     */
    public $DLExpansion;

    /**
     * Indicates that additional paging is not needed.
     *
     * This attribute will be true if the current results contain the last item
     * in the query.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Represents the next index that should be used for the next request when
     * an indexed paging view is used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $IndexedPagingOffset;

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
     * Represents the new numerator value to use for the next request when
     * fraction page views are used.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumeratorOffset;

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
     * Represents the total number of items that pass the restriction.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalItemsInView;
}
