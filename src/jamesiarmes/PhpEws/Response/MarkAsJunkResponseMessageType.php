<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\MarkAsJunkResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response message for a MarkAsJunk request.
 *
 * @package php-ews\Response
 */
class MarkAsJunkResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the identifier of the item that was moved.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $MovedItemId;
}
