<?php
/**
 * Contains EWSType_ReferenceItemResponseType.
 */

/**
 * Base class for responding to items with a reference.
 *
 * @package php-ews\Types
 */
class EWSType_ReferenceItemResponseType extends EWSType
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
