<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ItemInfoResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single item operation request.
 *
 * @package php-ews\Types
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of created items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;
}
