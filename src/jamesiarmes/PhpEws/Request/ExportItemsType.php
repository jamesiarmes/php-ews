<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\ExportItemsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to export items from a mailbox.
 *
 * @package php-ews\Request
 */
class ExportItemsType extends BaseRequestType
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
