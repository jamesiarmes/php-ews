<?php
/**
 * Contains ConversationShapeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the property set to return in a FindConversation operation response.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Create a common ResponseShapeType.
 */
class ConversationShapeType extends EWSType
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2013
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2013
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;
}
