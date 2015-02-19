<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PostReplyItemType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a reply to a post item.
 *
 * @package php-ews\Type
 */
class PostReplyItemType extends PostReplyItemBaseType
{
    /**
     * Represents the new body content of a post item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\BodyType
     */
    public $NewBodyContent;
}
