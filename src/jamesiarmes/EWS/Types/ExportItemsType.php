<?php
/**
 * Contains ExportItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to export items from a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class ExportItemsType extends EWSType
{
    /**
     * Contains an array of item identifiers that identify the items to export
     * from a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfItemIdsType
     */
    public $ItemIds;
}
