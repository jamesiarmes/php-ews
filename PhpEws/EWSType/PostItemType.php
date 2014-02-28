<?php
/**
 * Definition of the PostItemType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PostItemType type
 */
class PostItemType extends PhpEws\EWSType
{
    /**
     * ConversationIndex property
     *
     * @var base64Binary
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
     * @var SingleRecipientType
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
     * @var dateTime
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
     * @var SingleRecipientType
     */
    public $Sender;
}
