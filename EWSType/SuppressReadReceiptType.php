<?php
/**
 * Contains EWSType_SuppressReadReceiptType.
 */

/**
 * Used to suppress read receipts.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ReferenceItemResponseType.
 */
class EWSType_SuppressReadReceiptType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;
}
