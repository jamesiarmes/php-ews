<?php
/**
 * Contains RootItemIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies the root item of a deleted item.
 *
 * @package jamesiarmes\EWS\Types
 */
class RootItemIdType extends EWSType
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
