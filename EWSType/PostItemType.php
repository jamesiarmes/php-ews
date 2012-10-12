<?php
/**
 * Definition of the PostItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PostItemType type
 */
class EWSType_PostItemType extends EWSType
{
    /**
     * ConversationIndex property
     *
     * @var EWSType_base64Binary
     */
    public $ConversationIndex;

    /**
     * ConversationTopic property
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * From property
     *
     * @var EWSType_SingleRecipientType
     */
    public $From;

    /**
     * InternetMessageId property
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * PostedTime property
     *
     * @var EWSType_dateTime
     */
    public $PostedTime;

    /**
     * References property
     *
     * @var string
     */
    public $References;

    /**
     * Sender property
     *
     * @var EWSType_SingleRecipientType
     */
    public $Sender;
}
