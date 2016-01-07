<?php
/**
 * Contains EWSType_ConversationShapeType.
 */

/**
 * Defines the property set to return in a FindConversation operation response.
 *
 * @package php-ews\Types
 *
 * @todo Create a common ResponseShapeType.
 */
class EWSType_ConversationShapeType extends EWSType
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2013
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2013
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;
}
