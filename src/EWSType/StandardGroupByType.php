<?php
/**
 * Contains EWSType_StandardGroupByType.
 */

/**
 * Represents the standard grouping and aggregating mechanisms for a grouped
 * FindItem operation.
 *
 * @package php-ews\Enumerations
 */
class EWSType_StandardGroupByType extends EWSType
{
    /**
     * Groups by message:ConversationTopic and aggregates on
     * item:DateTimeReceived (maximum).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONVERSATION_TOPIC = 'ConversationTopic';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
