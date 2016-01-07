<?php
/**
 * Contains EWSType_AttachmentResponseShapeType.
 */

/**
 * Represents additional properties to return in a response to a GetAttachment
 * request.
 *
 * @package php-ews\Types
 */
class EWSType_AttachmentResponseShapeType extends EWSType
{
    /**
     * Identifies additional properties to return in a response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies how the body text is formatted in the response.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyTypeResponseType
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
