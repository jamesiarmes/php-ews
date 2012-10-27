<?php
/**
 * Contains EWSType_RootItemIdType.
 */

/**
 * Identifies the root item of a deleted item.
 *
 * @package php-ews\Types
 */
class EWSType_RootItemIdType extends EWSType
{
    /**
     * Identifies the new change key of the root item of a deleted item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Identifies the root item of a deleted item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemId;
}
