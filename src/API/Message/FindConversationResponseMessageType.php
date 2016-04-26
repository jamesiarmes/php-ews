<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindConversationResponseMessageType
 *
 *
 * XSD Type: FindConversationResponseMessageType
 *
 * @method FindConversationResponseMessageType addConversations(\jamesiarmes\PEWS\API\Type\ConversationType $conversations)
 * @method \jamesiarmes\PEWS\API\Type\ConversationType[] getConversations()
 * @method FindConversationResponseMessageType setConversations(array $conversations)
 */
class FindConversationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConversationType[]
     */
    protected $conversations = null;
}
