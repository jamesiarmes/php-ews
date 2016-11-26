<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetImItemListResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * {insert doc block}
 *
 * @package php-ews\Response
 */
class GetImItemListResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a list of instant messaging groups and instant messaging
     * contacts.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ImItemListType
     */
    public $ImItemList;
}
