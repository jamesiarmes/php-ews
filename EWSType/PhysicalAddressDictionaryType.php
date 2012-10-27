<?php
/**
 * Contains EWSType_PhysicalAddressDictionaryType.
 */

/**
 * Represents a collection of physical addresses that are associated with a
 * contact.
 *
 * @package php-ews\Types
 */
class EWSType_PhysicalAddressDictionaryType extends EWSType
{
    /**
     * Describes a single physical address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PhysicalAddressDictionaryEntryType
     */
    public $Entry;
}
