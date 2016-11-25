<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConversationNodeType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a node in a conversation.
 *
 * @package php-ews\Type
 */
class ConversationNodeType extends Type
{
    /**
     * Represents the Internet message identifier of an item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * Specifies all the items in the conversation node.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * Specifies the identifier of the parent Internet message.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ParentInternetMessageId;
}
