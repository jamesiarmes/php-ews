<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\StandardGroupByType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Represents the standard grouping and aggregating mechanisms for a grouped
 * FindItem operation.
 *
 * @package php-ews\Enumeration
 */
class StandardGroupByType extends Enumeration
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
}
