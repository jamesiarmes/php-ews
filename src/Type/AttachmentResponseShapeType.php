<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AttachmentResponseShapeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents additional properties to return in a response to a GetAttachment
 * request.
 *
 * @package php-ews\Type
 */
class AttachmentResponseShapeType extends Type
{
    /**
     * Identifies additional properties to return in a response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies how the body text is formatted in the response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $BodyType;

    /**
     * Specifies whether potentially unsafe HTML content is filtered from an
     * attachment.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $FilterHtmlContent;

    /**
     * Specifies whether the Multipurpose Internet Mail Extensions (MIME)
     * content of an item or attachment is returned in the response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludeMimeContent;
}
