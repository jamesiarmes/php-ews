<?php
/**
 * Contains EWSType_MimeContentType.
 */

/**
 * Represents the native Multipurpose Internet Mail Extensions (MIME) stream of
 * an object that is represented in base64Binary format.
 *
 * @package php-ews\Types
 */
class EWSType_MimeContentType extends EWSType
{
    /**
     * A text value that represents a base64Binary MIME stream.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * The International Standards Organization (ISO) name of the character set
     * used in the MIME message.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $CharacterSet;
}
