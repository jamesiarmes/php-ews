<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConversationShape.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies the property set to return in a FindConversation operation
 * response.
 *
 * @package php-ews\Type
 */
class ConversationShape extends Type
{
    /**
     * Identifies additional properties for use in the request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the set of properties to return in the response.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
