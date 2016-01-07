<?php
/**
 * Contains EWSType_ExportItemsType.
 */

/**
 * Represents a request to export items from a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_ExportItemsType extends EWSType
{
    /**
     * Contains an array of item identifiers that identify the items to export
     * from a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_NonEmptyArrayOfItemIdsType
     */
    public $ItemIds;
}
