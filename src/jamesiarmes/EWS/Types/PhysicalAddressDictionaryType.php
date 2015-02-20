<?php
/**
 * Contains PhysicalAddressDictionaryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of physical addresses that are associated with a
 * contact.
 *
 * @package jamesiarmes\EWS\Types
 */
class PhysicalAddressDictionaryType extends EWSType
{
    /**
     * Describes a single physical address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var PhysicalAddressDictionaryEntryType
     */
    public $Entry;
}
