<?php
/**
 * Contains ReferenceItemResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for responding to items with a reference.
 *
 * @package jamesiarmes\EWS\Types
 */
class ReferenceItemResponseType extends EWSType
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
