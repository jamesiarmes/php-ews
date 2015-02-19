<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExportItemsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and results of a request to export a single mailbox
 * item.
 *
 * @package php-ews\Types
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the item identifier of an exported item.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Contains the contents of an exported item.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Data;
}
