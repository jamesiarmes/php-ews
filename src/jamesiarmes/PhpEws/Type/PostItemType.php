<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PostItemType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a post item in the Exchange store.
 *
 * @package php-ews\Type
 */
class PostItemType extends ItemType
{
    /**
     * Contains a binary ID that represents the thread to which this message
     * belongs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $ConversationIndex;

    /**
     * Represents the conversation identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * Represents the address from which the post item was sent.
     *
     * The From element can only be set at creation time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $From;

    /**
     * Represents the Internet message identifier of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * Indicates whether a message has been read.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Represents the time that a PostItem was posted.
     *
     * This element is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $PostedTime;

    /**
     * Represents the Usenet header that is used to associate replies with the
     * original messages.
     *
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $References;

    /**
     * Identifies the sender of an item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $Sender;
}
