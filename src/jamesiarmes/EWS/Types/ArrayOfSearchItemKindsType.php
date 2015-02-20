<?php
/**
 * Contains ArrayOfSearchItemKindsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of messages to search.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfSearchItemKindsType extends EWSType
{
    /**
     * Indicates an item type to be searched.
     *
     * @since Exchange 2013
     *
     * @var SearchItemKindType
     */
    public $SearchItemKind;
}
