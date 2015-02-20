<?php
/**
 * Contains SuppressReadReceiptType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Used to suppress read receipts.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ReferenceItemResponseType.
 */
class SuppressReadReceiptType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;
}
