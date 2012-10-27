<?php
/**
 * Contains EWSType_ArrayOfUnknownEntriesType.
 */

/**
 * Contains an array of unknown permission entries that cannot be resolved
 * against the Active Directory directory service.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfUnknownEntriesType extends EWSType
{
    /**
     * Represents a single unknown permission entry that cannot be resolved
     * against Active Directory.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $UnknownEntry;
}
