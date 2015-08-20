<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindConversationResponseMessageType
 *
 *
 * XSD Type: FindConversationResponseMessageType
 *
 * @method array getConversations()
 * @method FindConversationResponseMessageType setConversations(array $conversations)
 */
class FindConversationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConversationType[]
     */
    protected $conversations = null;
}
