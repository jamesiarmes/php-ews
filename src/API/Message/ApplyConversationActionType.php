<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing ApplyConversationActionType
 *
 *
 * XSD Type: ApplyConversationActionType
 *
 * @method array getConversationActions()
 * @method ApplyConversationActionType setConversationActions(array $conversationActions)
 */
class ApplyConversationActionType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConversationActionType[]
     */
    protected $conversationActions = null;
}
